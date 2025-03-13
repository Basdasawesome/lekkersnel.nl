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
        $dataRequest = $database->prepare("SELECT *  FROM recipes WHERE recipe_id = :id");
        $dataRequest->bindParam(":id", $id);
        $dataRequest->execute();
        $data = $dataRequest->fetch(PDO::FETCH_ASSOC);
    } else {
        $dataRequest = $database->prepare("SELECT * FROM recipes");
        $dataRequest->execute();
        $data = $dataRequest->fetchAll(PDO::FETCH_ASSOC);
    }
    return $data;
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
