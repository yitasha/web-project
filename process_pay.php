<?php
		session_start();
		$order_number = $_SESSION['order_number'];
		$user_id = $_SESSION['user_id'];

		//connect to the server 
		$db = mysqli_connect("localhost", "root", "","pds");

		$check = "select * from orders where order_number = '$order_number'";
		//run the db and query check
		$result = mysqli_query($db,$check);

		//Fetch result from orders Database
		$row = mysqli_fetch_assoc($result);
		//Check if Order has already been paid
		if($row['paymentstatus'] == 'Paid')
		{
			print "<script type='text/javascript'>
			alert('This Order has already been paid!');
			window.location.href = 'profile.php';
	        </script>";
		}
		else
		{
			$q = "update orders set paymentstatus = 'Paid', parcelstatus = 'Waiting for Pick Up' where order_number = '$order_number' and customer_id like '$user_id'";
			mysqli_query($db, $q);
		}
?>
		<script type="text/javascript">
		alert("The Order Number: <?php print "$order_number" ?> Has Been Paid!");
		window.location.href = "profile.php";
        </script>