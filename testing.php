<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1> This page is for checking current valid SESSION variables </h1>
<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

</body>
</html>