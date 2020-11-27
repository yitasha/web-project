<?php
	//Basically this page is for checking&validating login status
	//Then redirect user to their usertype page, Customer and Driver.
	session_start();
	$username = $_SESSION['username'];
	if(!isset($username)) 
	{ 
		print "<script type='text/javascript'>
		alert('You have not logged in!');
		window.location.href = 'index.php';
	    </script>";
	}

	//retrieve usertype
	$usertype = $_SESSION['usertype'];

	if($usertype != 'Driver')
	{
		header("Location:customer.php");
	}
	else
	{
		header("Location:driver.php");
	}
	exit(0);
?>