<?php

function getPage()
{
    if (isset($_GET["page"])) {
        $_SESSION["page"] = $_GET["page"];
    }
    if (!isset($_SESSION["page"])) {
        $_SESSION["page"] = "home";
    }
    switch ($_SESSION["page"]) {
        case 'home':
            $database = getData();
            $favorieten = [$database[6], $database[5], $database[0]];
            $themas = ["italiaans", "nederlands"];
            $data = ["favs" => $favorieten, "thema" => $themas, "database" => $database];
            break;
        case 'uitwerking':
            $database = getData($_GET["id"]);
            $ingredients = explode(",", $database["ingredients"]);
            $instructions = preg_split('/\d+\.\s/', $database["instructions"], -1, PREG_SPLIT_NO_EMPTY);
            $data = ["recept" => $database, "ingredients" => $ingredients, "instructions" => $instructions];
            break;
        default:
            break;
    }
    include_once "../template/views/" . $_SESSION["page"] . ".view.php";
}
