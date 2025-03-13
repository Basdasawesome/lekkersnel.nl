<?php

function receptToevoegen() {
    $error = "";
    $pdo = DBconnect();

    $naam = trim($_POST["naam"]);
    $bereidingstijd = trim($_POST["bereidingstijd"]);
    $aantal = trim($_POST["aantal"]);
    $beschrijving = trim($_POST["beschrijving"]);
    $ingredienten = trim($_POST["ingredienten"]);
    $instructies = trim($_POST["instructies"]);
    $image = "/img/error.png";
    $user_id = $_SESSION["user_id"];
    
    if (is_null($naam) || is_null($bereidingstijd) || is_null($aantal) || is_null($ingredienten) || is_null($instructies)) {
        $error = "Alle velden moeten ingevuld worden!";
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
        $error = "Recept toegevoegd";
    }
    $_SESSION["message"] = $error;
}