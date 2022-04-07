<?php 

$server= 'localhost';
$username= 'id16845427_innowo';
$password='\=G_XkLFg{}V0r|6';
$name= 'id16845427_innowo_login_database';
$database='id16845427_innowo_login_database';

try {
	$conn = new PDO("mysql:host=$server;dbname=$database;",$username, $password);
} catch (PDOException $e) {
	die('connected failed: '.$e->getMessage());
}

?>