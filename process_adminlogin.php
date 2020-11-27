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
	$q = "select * from admins where admin_username = '$username' and admin_password = SHA('$password')";
	$result = mysqli_query($db, $q); 
	 

	
	if(mysqli_num_rows($result) > 0) { 
			 //Check usertype 
			$_SESSION['username'] = $username; 
 			$a = "select * from admins where admin_username = '$username'";
			$admins = mysqli_query($db,$a);
			while($row = mysqli_fetch_array($admins))
			{
				//Fetch required data
				$_SESSION['admin_id'] = $row['admin_id'];
				$_SESSION['usertype'] = $row['user_type'];
			}

			header("Location:admin.php");
		} 

	?>
		<script type="text/javascript">
		alert("You are not Admin!");
		window.location.href = "index.php";
        </script>
		
</body>
</html>