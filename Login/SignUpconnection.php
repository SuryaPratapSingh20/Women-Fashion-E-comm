<?php
	session_start();
	include "Connectionfile.php";
	//$user = 'root' ;
	//$pass = '' ;
	//echo $PageLink = $_GET[Page];
	$con	= mysqli_connect($host, $user, $pass, $db) or die("Connection failed: " . mysqli_connect_error());
	if (!$con)
		  {	
	  		die('Could not connect: ' . mysql_error());
	
	  	  }
		echo $Username = $_POST['Name'] ;
		echo $password = $_POST['Password'] ;
		echo $emailID = $_POST['Email'] ;
		//echo $date = date("Y/m/d") ;
		echo $sql="INSERT INTO login(ID,Email,Password,Name) VALUES('1','$emailID', '$password','$Username')";
		$result = mysqli_query($con, $sql) or die("Invalid query: " . mysqli_error());
		//session_start();		
		if (!$result)
		{
			echo("Error performing query: " . mysql_error() . "");
			exit();
		}

		else
		{
            header("Location:../index.php");
			echo "New record added successfully";
		}
		
			
		mysqli_close($con);
		
		?>