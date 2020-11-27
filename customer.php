<?php
	session_start();
	$usertype = $_SESSION['usertype'];
	$username = $_SESSION['username'];
	$customer_id = $_SESSION['user_id'];
	if(!isset($username))
	{
		print "<script type='text/javascript'>
		alert('You have not logged in!');
		window.location.href = 'index.php';
	    </script>";
	}
	if($usertype != 'Customer')
	{
		print "<script type='text/javascript'>
		alert('You are not a Customer!');
		window.location.href = 'index.php';
	    </script>";
	}
?>

<?php
		$page_title= "Home";
		include("header.php");
		include("nav.inc");
?>
	<main>
		<h1>Customers Page</h1>
		<h1><?php echo "Welcome back: $username, you are: $usertype"?></h1>
		<div id="customerParent">
			<div id="customerLeft">
				<h3>Your details</h3>
				<?php
				$db = mysqli_connect("localhost","root","","pds") or die(mysqli_error($db));
				$q = "select * from users where username like '$username'";
				$result = mysqli_query($db,$q) or die(mysqli_error($db));
				
				while($r=mysqli_fetch_array($result))
				{
					print "<h4>First Name: {$r['firstname']}</h4>";
		            print "<h4>Last Name: {$r['lastname']}</h4>";
					print "<h4>Address: {$r['address']}</h4>";
		            print "<h4>Post Code: {$r['postcode']}</h4>";
		            print "<h4>Phone: {$r['phone']}</h4>";
					print "<h4>Email: {$r['email']}</h4>";
				}
				?>
			</div>

			<div id="customerRight">
				<h3>Update Personal Information</h3>
				<form method="post" action="updateCustomer.php">
				<table>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" required/></td>
					<td>Email:</td>
					<td><input type="email" name="email" required/></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address" required/></td>
					<td>Post Code</td>
					<td><input type="text" name="postcode" maxlength="4" required/></td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td><input type="text" name="phone" maxlength="10" required/></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="submit" value = "update" required/></td></tr>
				</table>
				</form>
			</div>
		</div>

		<div id="ordersParent">
			<div id="ordersLeft">
				<h3>Orders History</h3>
				<?php
				$o = "select * from orders where customer_id like '$customer_id'";
				$orders = mysqli_query($db,$o) or die(mysqli_error($db));
				
				while($row=mysqli_fetch_array($orders))
				{

		            print "<div style='border:solid black 1px'><a class='ordername' href='orders.php?order_number={$row['order_number']}'>Order #:{$row['order_number']} To:{$row['destination_customer']} </a></div>";
				}
				?>
			</div>

			<div id="ordersRight">
				<h3>Place an P&D Order</h3>
				<form method="post" action="customerorder.php">
				<table>
					<tr>
						<td>To Customer's Full Name:</td>
						<td><input type="text" name="fullname" required/></td>
						<td>Phone Number:</td>
						<td><input type="text" name="phone" maxlength="10" required/></td>
					</tr>
					<td>&nbsp;</td>
					<tr>
						<td>From Address:</td>
						<td><input type="text" name="start_location" required/></td>
						<td>From Postdode</td>
						<td><input type="text" maxlength="4" name="start_postcode" required/></td>
					</tr>
					<tr>
						<td>To Address:</td>
						<td><input type="text" name="destination_address" required/></td>
						<td>To Post Code</td>
						<td><input type="text" maxlength="4" name="destination_postcode" required/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="submit" value = "Place Order" required/></td></tr>
				</table>
				</form>
			</div>
		</div>
	</main>
		<?php include "footer.php"; ?>
	</div>
	</body>
</html>