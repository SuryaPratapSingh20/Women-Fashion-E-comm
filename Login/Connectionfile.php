<?php
// Server Code
//For Local Machine

$host="localhost";
$user="root";
$pass="";
$db="ecomm";
	//global directory name
	//$dnameHost = "/home/royalqra/public_html/images/";
	//Local Directory
	//$dnameHost = "C:/xampp/htdocs/Craft1Final2/images/";

	try{
		$DB_con = new PDO("mysql:host={$host};dbname={$db}",$user,$pass);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	

?>