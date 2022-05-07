<?php
	header("Location: panel.php?m=The config.php file should have updated. PHP response code: <b>".file_put_contents("../config.php",$_POST['conf'])."</b>&c=green");
	die();
?>
