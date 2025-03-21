<?php

function receptToevoegen()
{
    $_SESSION["message"] = "";
    $message = "";
    $pdo = DBconnect();

    $target_dir = "../public/img/upload/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file = $_FILES["image"];

    if ($file["size"] > 0) {
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $uploadOk = 0;
            }
        }
        
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["image"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            $uploadOk = 0;
        }
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }

    $naam = trim($_POST["naam"]);
    $bereidingstijd = trim($_POST["bereidingstijd"]);
    $aantal = trim($_POST["aantal"]);
    $beschrijving = trim($_POST["beschrijving"]);
    $ingredienten = "";
    foreach ($_POST["ingredienten"] as $ingredient) {
        $ingredienten .= trim($ingredient) . ",";
    }
    $ingredienten = rtrim($ingredienten, ",");
    $instructies = "";
    foreach ($_POST["instructies"] as $instructie) {
        $instructies .= trim($instructie) . "|";
    }
    $instructies = rtrim($instructies, "|");
    $image = "/img/upload/" . $file["name"];
    $user_id = $_SESSION["user_id"];

    if (empty($naam) || empty($bereidingstijd) || empty($aantal) || empty($beschrijving) || empty($ingredienten) || empty($instructies)) {
        $message = "Alle velden moeten ingevuld worden!";
    } else if ($uploadOk == 0) {
        $message = "Er was een probleem met de foto uploaden";
    } else {
        $stmt = $pdo->prepare("INSERT INTO recipes (user_id, title, description, ingredients, preptime, quantity, instructions, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $user_id);
        $stmt->bindParam(2, $naam);
        $stmt->bindParam(3, $beschrijving);
        $stmt->bindParam(4, $ingredienten);
        $stmt->bindParam(5, $bereidingstijd);
        $stmt->bindParam(6, $aantal);
        $stmt->bindParam(7, $instructies);
        $stmt->bindParam(8, $image);
        $stmt->execute();
        $message = "Recept toegevoegd";
    }

    $_SESSION["message"] = $message;
}
