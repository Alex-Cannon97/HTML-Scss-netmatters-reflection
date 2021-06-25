<?php 
$servername = "localhost";
$username = "root";
$password = "";


try{
	$db = new PDO("mysql:host=localhost;dbname=netmattersphp",$username, $password);
}catch(PDOException $e){
	echo "Error, Connection failed: " . $e->getMessage();
	die;
}
?>