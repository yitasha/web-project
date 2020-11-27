<!DOCTYPE>
<html>
<body>
<?php
	session_start();
	
	session_destroy();
	session_unset();

?>
	<script type="text/javascript">
	alert("You have logged out, bye!");
	window.location.href = "index.php";
    </script>
</body>
</html>