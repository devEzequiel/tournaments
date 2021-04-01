<?php
require "environment.php";

$config= array();

if (ENVIRONMENT == 'development'){
	define ("BASE_URL", "http://localhost/GitHub/tournaments/");
	$config['dbname'] = 'tournaments';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';

} else if (ENVIRONMENT == 'production'){
	define ("BASE_URL", "");
	$config['dbname'] = '';
	$config['host'] = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}
global $pdo;
try {
	$pdo = new PDO ("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['dbuser'], $config['dbpass']);
}catch (PDOException $e) {
	echo 'ERROR: '.$e->getmessage();
	exit;
}