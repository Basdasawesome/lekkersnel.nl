<?php

use BcMath\Number;

function receptToevoegen()
{
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
    $tijd_eenheid = trim($_POST["tijd_eenheid"]);
    $aantal = trim($_POST["aantal"]);
    $beschrijving = trim($_POST["beschrijving"]);
    $instructies = $_POST["instructies"];
    $ingredienten = $_POST["ingredienten"];
    $hoeveelheid = $_POST["hoeveelheid"];
    $ingredient_eenheid = $_POST["ingredient_eenheid"];
    if ($file["size"] > 0) {
        $image = "/img/upload/" . $file["name"];
    } else {
        $image = "/img/error.png";
    }
    $user_id = $_SESSION["user_id"];
    $recipe_id = 0;
    
    if (empty($naam) || empty($bereidingstijd) || empty($tijd_eenheid) || empty($aantal) || empty($beschrijving) || empty($ingredienten) || empty($instructies) || count($ingredienten) !== count($hoeveelheid) || count($ingredienten) !== count($ingredient_eenheid) || count($ingredient_eenheid) !== count($hoeveelheid)) {
        $message = "Alle velden moeten ingevuld worden!";
    } else if (!is_numeric($bereidingstijd) || !is_numeric($aantal)) {
        $message = "Bereidingstijd en personen moeten een cijfer zijn";
    } else if ($uploadOk == 0) {
        $message = "Er was een probleem met de foto uploaden";
    } else {
        $stmt = $pdo->prepare("INSERT INTO recipes (user_id, title, description, image) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $user_id);
        $stmt->bindParam(2, $naam);
        $stmt->bindParam(3, $beschrijving);
        $stmt->bindParam(4, $image);
        $stmt->execute();
        $recipe_id = $pdo->lastInsertId();

        $i = 0;
        foreach ($instructies as $instructie) {
            $stmt = $pdo->prepare("INSERT INTO instructions (recipe_id, step_number, instruction_text) VALUES (?, ?, ?)");
            $stmt->bindParam(1, $recipe_id);
            $stmt->bindParam(2, $i);
            $stmt->bindParam(3, $instructie);
            $stmt->execute();
            $i++;
        }
        
        $stmt = $pdo->prepare("INSERT INTO preparationtime (recipe_id, time_value, time_unit) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $recipe_id);
        $stmt->bindParam(2, $bereidingstijd);
        $stmt->bindParam(3, $tijd_eenheid);
        $stmt->execute();
        
        $j = 0;
        foreach ($ingredienten as $ingredient) {
            $stmt = $pdo->prepare("SELECT name, ingredient_id FROM ingredients WHERE name = :name");
            $stmt->bindParam(":name", $ingredient);  
            $stmt->execute();
            $name = $stmt->fetch(PDO::FETCH_ASSOC);
            $ingredient_id = "";
            if ($name && $name["name"] == $ingredient) {
                $ingredient_id = $name["ingredient_id"];
            } else {
                $stmt = $pdo->prepare("INSERT INTO ingredients (name) VALUES (?)");
                $stmt->bindParam(1, $ingredient);
                $stmt->execute();
                $ingredient_id = $pdo->lastInsertId();
            }
            $stmt = $pdo->prepare("INSERT INTO recipe_ingredients (recipe_id, ingredient_id, quantity, unit) VALUES (?, ?, ?, ?)");
            $stmt->bindParam(1, $recipe_id);
            $stmt->bindParam(2, $ingredient_id);
            $stmt->bindParam(3, $hoeveelheid[$j]);
            $stmt->bindParam(4, $ingredient_eenheid[$j]);
            $stmt->execute();

            $j++;
        } 

        $message = "Recept toegevoegd";
    }

    $_SESSION["message"] = $message;
}
