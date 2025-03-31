<?php

function getPage()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_SESSION["page"] === "profile") {
            $userId = $_SESSION['user_id'];
            $username = trim($_POST['username'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if (empty($username) || empty($email)) {
                $_SESSION['error'] = "Username and email cannot be empty.";
                header("Location: ?page=profile");
                exit();
            }

            $updatePassword = !empty($password);
            if (updateUser($userId, $username, $email, $updatePassword ? $password : null)) {
                $_SESSION['success'] = "Profile updated successfully!";
                $_SESSION['username'] = $username;
            } else {
                $_SESSION['error'] = "Failed to update profile.";
            }
            header("Location: ?page=profile");
            exit();
        } else {
            handleAuthRequests();
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST" && $_GET["page"] == "toevoegen") {
        receptToevoegen();
    } else {
        $_SESSION["message"] = "";
    }
    if (isset($_GET["page"])) {
        $_SESSION["page"] = $_GET["page"];
        $user = getUser();
        $i = 0;
    }
    if (!isset($_SESSION["page"])) {
        $_SESSION["page"] = "home";
    }
    switch ($_SESSION["page"]) {
        case 'home':
            $database = getData();
            $recipeIds = array_column($database, 'recipe_id');
            $favorieten = [];
            for ($i = 0; $i < 3 && $i < count($recipeIds); $i++) {
                $favorieten[] = getData($recipeIds[$i]);
            }
            $themas = ["italiaans", "nederlands"];
            $data = ["favs" => $favorieten, "thema" => $themas, "database" => $database];
            break;
        case 'uitwerking':
            $database = getData($_GET["id"]);
            if (!empty($database)) {
                $data = [
                    "recept" => $database['recipe'],
                    "ingredients" => $database['ingredients'],
                    "instructions" => $database['instructions'],
                    "preparation_time" => $database['preparation_time']
                ];
            } else {
                $data = ["recept" => [], "ingredients" => [], "instructions" => []];
            }
            break;
        case 'login':
            $database = getData();
            $recipeIds = array_column($database, 'recipe_id');
            $favorieten = [];
            for ($i = 0; $i < 3 && $i < count($recipeIds); $i++) {
                $favorieten[] = getData($recipeIds[$i]);
            $themas = ["italiaans", "nederlands"];
            $data = ["thema" => $themas, "database" => $database];
            break;
        case 'logout':
            include_once __DIR__ . '/logout.php';
            break;
        case 'profile':
            $user = getUser();
            $data = ["user" => $user];
            break;
        case 'recepten':
            $database = getData();
            $recipeIds = array_column($database, 'recipe_id');
            $favorieten = [];
            for ($i = 0; $i < 3 && $i < count($recipeIds); $i++) {
                $favorieten[] = getData($recipeIds[$i]);
            }
            $data = ["favs" => $favorieten, "database" => $database];
            break;
        case 'toevoegen':
            checkAuth();
            break;
        default:
            break;
    }
    include_once "../template/views/" . $_SESSION["page"] . ".view.php";
}

function handleAuthRequests() {
    require_once __DIR__ . '/database.php';
    $pdo = DBconnect();

    if (isset($_GET['page'])) {
        switch($_GET['page']) {
            case 'login':
                $email = trim($_POST['email'] ?? '');
                $password = $_POST['password'] ?? '';
                
                $stmt = $pdo->prepare("SELECT * FROM Users WHERE email = ?");
                $stmt->execute([$email]);
                $user = $stmt->fetch();

                if ($user && password_verify($password, $user['password_hash'])) {
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['username'] = $user['username'];
                    header("Location: ?page=home");
                    exit();
                } else {
                    $_SESSION['error'] = "Invalid email or password";
                    header("Location: ?page=login");
                    exit();
                }
                break;

            case 'register':
                $username = trim($_POST['username'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $password = '';

                if (isset($_POST['password']) && isset($_POST['repeatpassword'])) {
                    $firstpassword = trim($_POST['password']);
                    $secondpassword = trim($_POST['repeatpassword']);

                    if (empty($firstpassword) || empty($secondpassword)) {
                        $_SESSION['error'] = "Both passwords are required";
                        header("Location: ?page=register");
                        exit();
                    } else if ($firstpassword !== $secondpassword) {
                        $_SESSION['error'] = "Passwords need to match";
                        header("Location: ?page=register");
                        exit();
                    } else {
                        $password = $firstpassword;
                    }
                } else {
                    $_SESSION['error'] = "Password fields are missing";
                    header("Location: ?page=register");
                    exit();
                }

                $stmt = $pdo->prepare("SELECT * FROM Users WHERE email = ? OR username = ?");
                $stmt->execute([$email, $username]);

                if ($stmt->rowCount() > 0) {
                    $_SESSION['error'] = "Email or Username already exists";
                    header("Location: ?page=register");
                    exit();
                } else {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $pdo->prepare("INSERT INTO Users (username, email, password_hash) VALUES (?, ?, ?)");

                    if ($stmt->execute([$username, $email, $hashed_password])) {
                        $_SESSION['success'] = "Registration successful! You can now log in.";
                        header("Location: ?page=login");
                        exit();
                    } else {
                        $_SESSION['error'] = "Could not complete registration";
                        header("Location: ?page=register");
                        exit();
                    }
                }
                break;
        }
    }
}
