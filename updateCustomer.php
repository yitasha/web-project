<?php
		session_start();
		$usertype = $_SESSION['usertype'];
		$username = $_SESSION['username'];

		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$postcode = $_POST['postcode'];
		$email = $_POST['email'];

		//connect to the server 
		$db = mysqli_connect("localhost", "root", "","pds");

		$q = "update users set password = SHA('$password'), phone = '$phone', address = '$address', postcode = '$postcode', email = '$email' where username like '$username'";

		mysqli_query($db,$q);
?>
		<script type="text/javascript">
		alert("You have updated your details");
		window.location.href = "profile.php";
        </script>