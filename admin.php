<?php
	session_start();
	$username = $_SESSION['username'];
	$usertype = $_SESSION['usertype'];
	if(!isset($username))
	{
		print "<script type='text/javascript'>
		alert('You have not logged in!');
		window.location.href = 'index.php';
	    </script>";
	}
	if($usertype != 'admin')
	{
		print "<script type='text/javascript'>
		alert('You are not a ADMIN!');
		window.location.href = 'index.php';
	    </script>";
	}
?>

<?php
		$page_title= "Admin";
		include("header.php");
		include("nav.inc");
?>
	<main>
		<h1>Admins Page</h1>
		<h1><?php echo "Welcome back Admin: $username, you are: $usertype"?></h1>
		<div id="customerParent">
			<div id="customerLeft">
				<h3>Users List</h3>
				<?php
				//connect to the server 
				$db = mysqli_connect("localhost", "root", "","pds" ); 
				$u = "select * from users";
				$users = mysqli_query($db,$u) or die(mysqli_error($db));
				
				while($row=mysqli_fetch_array($users))
				{
		            print "<div style='border:solid black 1px'><a class='ordername' href='users.php?userID={$row['user_id']}'>User Name:{$row['username']} Phone:{$row['phone']} </a></div>";
				}
				?>
			</div>

			<div id="customerRight">
				<h3>Monthly Invoices for Jobs completed</h3>
				<?php
				//Fetch orders that have been paid
				$o = "select * from orders where paymentstatus = 'Paid'";
				$orders = mysqli_query($db,$o) or die(mysqli_error($db));
				
				//Run Single Query In PHP
				foreach($db->query('SELECT SUM(cost) FROM orders WHERE paymentstatus= "Paid"') as $row) 
				{
					print "<h3>Total Price for orders completed: $" . $row['SUM(cost)'] . "</h3>";
				}
				
				while($row=mysqli_fetch_array($orders))
				{

		            print "<div style='border:solid black 1px'><a class='ordername' href='orders.php?order_number={$row['order_number']}'>Order #:{$row['order_number']} To:{$row['destination_customer']} Cost $: {$row['cost']} </a></div>";
				}
				?>
			</div>
		</div>

	</main>
		<?php include "footer.php"; ?>
	</div>
	</body>
</html>