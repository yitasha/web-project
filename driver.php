<?php
	session_start();
	$usertype = $_SESSION['usertype'];
	$username = $_SESSION['username'];
	if(!isset($username)) 
	{
		print "<script type='text/javascript'>
		alert('You have not logged in!');
		window.location.href = 'index.php';
	    </script>";
	}
	if($usertype != 'Driver')
	{
		print "<script type='text/javascript'>
		alert('You are not a Driver!');
		window.location.href = 'profile.php';
	    </script>";
	}
?>

<?php
		$page_title= "Home";
		include("header.php");
		include("nav.inc");
?>
		<main>
		<h1>Drivers Page</h1>
		<h1><?php echo "Welcome back: $username, you are: $usertype"?></h1>
		
<div class="container-fluid">

	
	<div class="row">
	<div class="col-sm-6 col-md-4 col-lg-4">
	<p>The book begins by introducing Mr. and Mrs. Dursley, and their baby son Dudley. They live on Privet Drive and try to act as normal as possible. However, we soon learn that the Dursleys are hiding something.
What they're hiding is the Potter family; Mrs. Potter is Mrs. Dursley's sister, and the Dursleys try to pretend the Potters don't exist.
The narrator says that they don't realize how unusual this particular day is going to be – they don't see an owl fly past the window. But as Mr. Dursley leaves for work, he thinks he sees a cat reading a map, just for a second.
	</p>
	</div>
	
	<div class="col-sm-6 col-md-4 col-lg-4">
	<p>The book begins by introducing Mr. and Mrs. Dursley, and their baby son Dudley. They live on Privet Drive and try to act as normal as possible. However, we soon learn that the Dursleys are hiding something.
What they're hiding is the Potter family; Mrs. Potter is Mrs. Dursley's sister, and the Dursleys try to pretend the Potters don't exist.
The narrator says that they don't realize how unusual this particular day is going to be – they don't see an owl fly past the window. But as Mr. Dursley leaves for work, he thinks he sees a cat reading a map, just for a second.
	</p>
	</div>
	
	
	<div class="col-sm-6 col-md-4 col-lg-4">
	<p>The book begins by introducing Mr. and Mrs. Dursley, and their baby son Dudley. They live on Privet Drive and try to act as normal as possible. However, we soon learn that the Dursleys are hiding something.
What they're hiding is the Potter family; Mrs. Potter is Mrs. Dursley's sister, and the Dursleys try to pretend the Potters don't exist.
The narrator says that they don't realize how unusual this particular day is going to be – they don't see an owl fly past the window. But as Mr. Dursley leaves for work, he thinks he sees a cat reading a map, just for a second.
	</p>
	</div>
	
	<div class="col-sm-6 col-md-4 col-lg-3">
	<p>The book begins by introducing Mr. and Mrs. Dursley, and their baby son Dudley. They live on Privet Drive and try to act as normal as possible. However, we soon learn that the Dursleys are hiding something.
What they're hiding is the Potter family; Mrs. Potter is Mrs. Dursley's sister, and the Dursleys try to pretend the Potters don't exist.
The narrator says that they don't realize how unusual this particular day is going to be – they don't see an owl fly past the window. But as Mr. Dursley leaves for work, he thinks he sees a cat reading a map, just for a second.
	</p>
	</div>
	
	<div class="col-sm-6 col-md-4 col-lg-3">
<p>The book begins by introducing Mr. and Mrs. Dursley, and their baby son Dudley. They live on Privet Drive and try to act as normal as possible. However, we soon learn that the Dursleys are hiding something.
What they're hiding is the Potter family; Mrs. Potter is Mrs. Dursley's sister, and the Dursleys try to pretend the Potters don't exist.
The narrator says that they don't realize how unusual this particular day is going to be – they don't see an owl fly past the window. But as Mr. Dursley leaves for work, he thinks he sees a cat reading a map, just for a second.
	</p>
	</div>
	
	<div class="col-sm-6 col-md-4 col-lg-3">
	<p>The book begins by introducing Mr. and Mrs. Dursley, and their baby son Dudley. They live on Privet Drive and try to act as normal as possible. However, we soon learn that the Dursleys are hiding something.
What they're hiding is the Potter family; Mrs. Potter is Mrs. Dursley's sister, and the Dursleys try to pretend the Potters don't exist.
The narrator says that they don't realize how unusual this particular day is going to be – they don't see an owl fly past the window. But as Mr. Dursley leaves for work, he thinks he sees a cat reading a map, just for a second.
	</p>
	</div>
	
	<div class="col-sm-6 col-md-4 col-lg-3">
	<p>The book begins by introducing Mr. and Mrs. Dursley, and their baby son Dudley. They live on Privet Drive and try to act as normal as possible. However, we soon learn that the Dursleys are hiding something.
What they're hiding is the Potter family; Mrs. Potter is Mrs. Dursley's sister, and the Dursleys try to pretend the Potters don't exist.
The narrator says that they don't realize how unusual this particular day is going to be – they don't see an owl fly past the window. But as Mr. Dursley leaves for work, he thinks he sees a cat reading a map, just for a second.
	</p>
	</div>
</div>
</div>
		
		<?php include "footer.php"; ?>
	</div>
	</body>
</html>