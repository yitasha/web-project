<?php
	session_start();
	//Check if username exists in this SESSION
	if(isset($_SESSION['username']))
	{
		//Then check if it is an ADMIN account,then redirect
		if($_SESSION['usertype'] == 'admin')
		{
			header("Location:admin.php");
		}
	}
?>

<?php 
$page_title= "Admin Login";
include "header.php";
?>
	<main>
	<h1>Admins Only!</h1>
	<div>
	<form method="post" action="process_adminlogin.php" style="padding:50px; padding-left: 350px;"> 
				<table > 
				<tr> 
				<td>Admin Username</td> 
				<td><input type="text" name="username" required /></td> 
				</tr> 
				<tr> 
				<td>Admin Key</td> 
				<td><input type="password" name="password" required /></td> 
				</tr>
				<tr> 
				<td>&nbsp;</td> 
				<td><input class="btn btn-success" type="submit" value = "Login" /></td> 
				</tr> 
				</table> 
	</form>
	</div>
	</main>
</div>	
</body> 
</html>