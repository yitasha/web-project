<!DOCTYPE html>
<html>
<body>
<?php 
	session_start(); 
	$username = $_POST['username']; 
	$password = $_POST['password']; 

//connect to the server 
$db = mysqli_connect("localhost", "root", "","pds" ); 

//run the query
 $q = "select * from users where username = '$username' and password = SHA('$password')";
 $result = mysqli_query($db, $q); 

 //Check usertype 
 $u = "select * from users where username = '$username'";
 $users = mysqli_query($db,$u);
 
 if(mysqli_num_rows($result) > 0) { 
		
		$_SESSION['username'] = $username; 
		
		while($row = mysqli_fetch_array($users))
		{
			//Fetch required data from Table for processing orders
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname'] = $row['lastname'];
			//fetch the result and choose 'user_type' from the database $row then validate;
			$_SESSION['usertype'] = $row['user_type'];
			$usercheck = $row['user_type'];	
		}

		if($usercheck == 'Driver')
		{
			header("Location:driver.php");
		}
		else
		{
			header("Location:customer.php");
		}
			
	} 
		else { 
		}
		?>

		<script type="text/javascript">
		alert("Your ID or password is incorrect, please try again");
		window.location.href = "login.php";
        </script>
		
</body>
</html>