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
