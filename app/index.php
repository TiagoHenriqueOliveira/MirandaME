<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "miranda_me";

//difinindo a rota
$route = $_GET['route'];

require_once($route."/index.php");

// rainTPL
include("lib/template/raintpl/rain.tpl.class.php");
raintpl::$tpl_dir = $_GET['route']."/tpl/"; // template directory
raintpl::$cache_dir = $_GET['route']."/tmp/"; // cache directory