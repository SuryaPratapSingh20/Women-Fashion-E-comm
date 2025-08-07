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
		
		echo $sql="select Name from Login where Email ='$_POST[Email]' and Password ='$_POST[Password]'";
		$result = mysqli_query($con, $sql) or die("Invalid query: " . mysql_error());
		//session_start();		
		if (!$result)
		{
			echo("Error performing query: " . mysql_error() . "");
			exit();
		}

		else
		{
			while ( $row = mysqli_fetch_array($result) )
			{
				echo $uname = $row["Name"];
				echo $_SESSION['ActiveUserName']=	$uname;
			}	
            header("Location:../index.php");
		}
			
		mysqli_close($con);
		
		?>