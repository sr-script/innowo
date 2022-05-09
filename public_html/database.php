<?php 

$server= 'localhost';
$username= 'root';

$database='innowo_login_database';
$name= 'innowo_login_database';

try {
	$conn = new PDO('mysql:host=localhost;dbname=innowo_login_database;',$username);
} catch (PDOException $e) {
	die('connected failed: '.$e->getMessage());
}

?>