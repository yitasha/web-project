<?php
		session_start();
		//data given by SESSION during logging
		$usertype = $_SESSION['usertype'];
		$username = $_SESSION['username'];
		$customer_id = $_SESSION['user_id'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
		//data given by form
		$destination_customer = $_POST['fullname'];
		$phone = $_POST['phone'];
		$start_location = $_POST['start_location'];
		$start_postcode = $_POST['start_postcode'];
		$destination_location = $_POST['destination_address'];
		$destination_postcode = $_POST['destination_postcode'];
		$parcelstatus = "Not Picked Up";
		$driver_id = "None";
		$paymentstatus = "Unpaid";
		//Parcel cost is Destination postcode + Start postcode then multiply 0.05
		$cost = ($destination_postcode+$start_postcode) * 0.05;

		//connect to the server 
		$db = mysqli_connect("localhost", "root", "","pds");

		$q = "insert into orders values(null,'$customer_id','$firstname $lastname','$start_location','$start_postcode','$destination_customer','$phone','$destination_location','$destination_postcode','$parcelstatus','$paymentstatus','$cost','$driver_id',now())";

		mysqli_query($db,$q);
?>

	<script type="text/javascript">
	alert("The Order Has Been Placed");
	window.location.href = "profile.php";
    </script>
		