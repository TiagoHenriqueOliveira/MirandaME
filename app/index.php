<?php

$db_host = "localhost:3306";
$db_user = "root";
$db_pass = "";
$db_name = "miranda_me";

//difinindo a rota
$route = $_GET['route'];

require_once($route."/index.php");