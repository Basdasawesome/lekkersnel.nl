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
            $favorieten = [1,2,3,4,5,6,7];
            $themas = ["italiaans", "nederlands"];
            $database = getData();
            $data = ["favs" => $favorieten, "thema" => $themas, "database" => $database];
            break;
        default:
            break;
    }
    include_once "../template/views/" . $_SESSION["page"] . ".view.php";
}
