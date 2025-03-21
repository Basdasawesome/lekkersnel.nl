<?php

function receptToevoegen()
{
    var_dump($_POST["ingredienten"], $_POST["instructies"]);

    $_SESSION["message"] = "";
    $pdo = DBconnect();

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
    $image = "/img/error.png";
    $user_id = $_SESSION["user_id"];

    var_dump($ingredienten, $instructies);

    if (empty($naam) || empty($bereidingstijd) || empty($aantal) || empty($beschrijving) || empty($ingredienten) || empty($instructies)) {
        $message = "Alle velden moeten ingevuld worden!";
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
