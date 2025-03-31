<?php

function DBconnect()
{

    $host = '127.0.0.1';
    $db   = 'lekkersnelDB';
    $user = 'bit_academy';
    $pass = 'bit_academy';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $options);
    return $pdo;
}

function getData($id = null) 
{
    $database = DBconnect();
    if ($id !== null) {
        $recipeQuery = $database->prepare("SELECT recipe_id, title, description, image FROM recipes WHERE recipe_id = :id");
        $recipeQuery->bindParam(":id", $id);
        $recipeQuery->execute();
        $recipeData = $recipeQuery->fetch(PDO::FETCH_ASSOC);

        $ingredientsQuery = $database->prepare("
            SELECT i.name, i.unit, ri.quantity 
            FROM recipe_ingredients ri 
            JOIN Ingredients i ON ri.ingredient_id = i.ingredient_id 
            WHERE ri.recipe_id = :id
        ");
        $ingredientsQuery->bindParam(":id", $id);
        $ingredientsQuery->execute();
        $ingredientsData = $ingredientsQuery->fetchAll(PDO::FETCH_ASSOC);

        $instructionsQuery = $database->prepare("
            SELECT step_number, instruction_text 
            FROM Instructions 
            WHERE recipe_id = :id 
            ORDER BY step_number ASC
        ");
        $instructionsQuery->bindParam(":id", $id);
        $instructionsQuery->execute();
        $instructionsData = $instructionsQuery->fetchAll(PDO::FETCH_ASSOC);

        $timeQuery = $database->prepare("
            SELECT time_value, time_unit 
            FROM PreparationTime 
            WHERE recipe_id = :id
        ");
        $timeQuery->bindParam(":id", $id);
        $timeQuery->execute();
        $timeData = $timeQuery->fetch(PDO::FETCH_ASSOC);

        return [
            'recipe' => $recipeData,
            'ingredients' => $ingredientsData,
            'instructions' => $instructionsData,
            'preparation_time' => $timeData
        ];
    } else {
        $dataRequest = $database->prepare("SELECT recipe_id, title, description, image FROM recipes");
        $dataRequest->execute();
        return $dataRequest->fetchAll(PDO::FETCH_ASSOC);
    }
}

function getUser() {
    if (!isset($_SESSION['user_id'])) {
        return null;
    }

    try {
        $db = DBconnect();
        
        $query = "SELECT * FROM Users 
                 WHERE user_id = :user_id";
        
        $stmt = $db->prepare($query);
        $stmt->execute(['user_id' => $_SESSION['user_id']]);
        
        error_log("Rows returned: " . $stmt->rowCount());
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($user);  

        return $user ?: null;

    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        return null;
    }
}

function updateUser($userId, $username, $email, $password = null) {
    try {
        $db = DBconnect();
        
        $query = "UPDATE Users SET username = :username, email = :email";
        
        if ($password !== null && $password !== '') {
            $query .= ", password_hash = :password_hash";
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        }
        
        $query .= " WHERE user_id = :user_id";
        
        $stmt = $db->prepare($query);
        
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':user_id', $userId);
        
        if ($password !== null && $password !== '') {
            $stmt->bindValue(':password_hash', $hashedPassword);
        }
        
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Update User Error: " . $e->getMessage());
        return false;
    }
}