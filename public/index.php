<?php

session_start();

include_once "../src/helpers/database.php";
include_once "../src/helpers/core.php";
include_once "../src/helpers/add.php";
require_once __DIR__ . '/../src/helpers/auth.php';


getPage();
// checkAuth();
