<?php

include ('autoloader.php');

$klase = new klase("config.php");
$config = $klase->getConfig();
$db= singleton::getInstance($config);
$dbconnection = $db->getConnection();

var_dump($dbconnection);




?>
