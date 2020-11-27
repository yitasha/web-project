<?php 
$page_title= "Register";
include "header.php";
?>
	<main style="text-align: center";>
	<h1>Please register with your name and password</h1>
	<div>
	<form method="post" action="process_register.php" style="padding:50px; padding-left: 150px;" >
		<table >
			<tr >
				<td>Username:</td>
				<td><input type="text" name="username" required/></td>
				<td>Password</td>
				<td><input type="password" name="password" minlength="6" required/></td>
			</tr>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="firstname" required/></td>
				<td>Last Name:</td>
				<td><input type="text" name="lastname" required/></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
				<td><input type="text" name="phone" maxlength="10" required/></td>
				<td>Email</td>
				<td><input type="email" name="email" required/></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" required/></td>

				<td>Post Code</td>
				<td><input type="text" maxlength="4" name="postcode" required/></td>
			</tr>
			<tr>
				<td>I am a:</td>
				<td>
					<select name="usertype"> 
						<option value="Customer">Customer</option> 
						<option value="Driver">Driver</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td><br></td> 
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input class="btn btn-success" type="submit" name="submit" value = "Register" required/></td>

			</tr>
		</table>
</form>
</div>

</main>
</div>
</body>
</html>
