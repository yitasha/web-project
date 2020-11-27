<?php 
		$page_title= "Users";
		include "header.php";
		include "nav.inc";?>
        
	<main>
	<div style="float:right; padding-right: 50px; border:solid red 2px; padding: 30px;">
		
		<h3> Example Functions Button </h3>
		<button type="button" class="btn btn-primary">Functions</button>
		<br>
		<br>
		<button type="button" class="btn btn-danger">Functions</button>
		<br>
		<br>
		<button type="button">Functions</button>

	</div>
	<?php
		 
		$user_id = $_GET['userID'];
		//connect to my database artworks
		$db = mysqli_connect("localhost","root","","pds") or die(mysqli_error($db));
		
		$q = "select * from users where user_id = '$user_id'";
		
		$result = mysqli_query($db, $q) or die(mysqli_error($db));
		
		
		while($row = mysqli_fetch_array($result))
		{
			print "<div style='float:left; padding-left:150px;''>";
			print "<h1>User ID #: $user_id [{$row['user_type']}]</h1>";
			print "<h3>Username: {$row['username']}</h3>";
			print "<h3>First Name: {$row['firstname']}</h3>";
			print "<h3>Last Name: {$row['lastname']}";
			print "<h3>Phone #:{$row['phone']}</h3>";
			print "<h3>Address: {$row['address']}</h3>";
			print "<h3>Post Code: {$row['postcode']}</h3>";
			print "<h3>Email: {$row['email']}</h3>";
			print "<h3>Date Registered: {$row['reg_date']}</h3>";
			print "</div>";
		}
	?>

	</main>
		<?php include "footer.php"; ?>
	</div>
	</body>
</html>
