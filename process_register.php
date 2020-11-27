<!DOCTYPE html>
<html>
<body>
		<?php
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$postcode = $_POST['postcode'];
		$usertype = $_POST['usertype'];
		//connect to the server 
		$db = mysqli_connect("localhost", "root", "","pds");

		//check if username exists
		$check = "select * from users where username like '$username'";
		//run the db and query check
		$result = mysqli_query($db,$check);

		if(mysqli_num_rows($result) > 0)
		{
			print "<script type='text/javascript'>
			alert('This username has been registered,you can only register once!');
			window.location.href = 'register.php';
	        </script>";
		}
		else
		{
			$q = "insert into users values(null,'$username',SHA('$password'),'$firstname','$lastname','$phone','$address','$postcode','$email',now(),'$usertype')";
			mysqli_query($db, $q);
		}
		?>
		<script type="text/javascript">
		alert("You have registered, your username is: <?php echo "$username" ?> ");
		window.location.href = "login.php";
        </script>
</body>
</html>