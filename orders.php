<?php 
		session_start();
		$page_title= "Orders";
		include "header.php";
		include "nav.inc";
?>
        
	<main>

		<div style="float:right; padding-right: 50px; border:solid red 2px; padding: 30px;">
		<form method="post" action="process_pay.php" >
			<h3> Payment Methods</h3>
			<br>
				<input class="btn btn-danger" type="image" src="img/visa.jpg" alt="Visa" />
			<br>
			<br>
				<input type="image" src="img/mastercard.jpg" alt="Visa" />
			<br>
			<br>
				<input type="image" src="img/paypal.jpg" alt="Visa" />
			<br>
			<br>
				<input type="image" src="img/cash.jpg" alt="Visa" />
			<br>
			<br>
			<button type="button" class="btn btn-success">Extra Functions</button>
		</form>
	</div>
	<?php
		 
		$order_number = $_GET['order_number'];
		$_SESSION['order_number'] = $order_number;
		//connect to my database artworks
		$db = mysqli_connect("localhost","root","","pds") or die(mysqli_error($db));
		
		$q = "select * from orders where order_number = '$order_number'";
		
		$result = mysqli_query($db, $q) or die(mysqli_error($db));
		
		
		while($row = mysqli_fetch_array($result))
		{
			print "<div style='float:left; padding-left:150px; border:solid black 3px; padding:20px'>";
			print "<h1>Order #: $order_number</h1>";
			print "<h3>From: {$row['customer_name']}</h3>";
			print "<h3>To: {$row['destination_customer']}, Phone:{$row['phone']}</h3>";
			print "<h3>From Address: {$row['start_location']}    Postcode:{$row['start_postcode']}</h3>";
			print "<h3>To Address: {$row['destination_location']}    Postcode:{$row['destination_postcode']}</h3>";
			print "<h3>Driver: {$row['driver_id']}</h3>";
			print "<h3>Parcel Status: {$row['parcelstatus']}</h3>";
			print "<h3>Cost $: {$row['cost']}</h3>";
			print "<h3>Payment Status: {$row['paymentstatus']}</h3>";
			print "<h3>Order Date: {$row['order_date']}</h3>";
			print "</div>";
		}
	?>

	</main>
		<?php include "footer.php"; ?>
	</div>
	</body>
</html>
