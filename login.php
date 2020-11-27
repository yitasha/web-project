<?php 
$page_title= "Login";
include "header.php";
?>
	<main>
	<h1>Log in</h1>
	<h1>Please double check security before typing your password</h1>
	<div >
	<form method="post" action="process_login.php" style="padding:50px; padding-left: 340px; "> 
				<table> 
				<tr> 
				<td>Username</td> 
				<td><input type="text" name="username" /></td> 
				</tr> 
				<tr> 
				<td>Password</td> 
				<td><input type="password" name="password" /></td> 
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