<?php 

$server= 'localhost';
$username= 'root';

$database='innowo';
$name= 'innowo';

try {
	$conn = new PDO('mysql:host=localhost;dbname=innowo;',$username);
} catch (PDOException $e) {
	die('connected failed: '.$e->getMessage());
}

?>