<?php
	header("Location: panel.php?m=The plugin should have been installed to the config.php. PHP response code: <b>".file_put_contents("../config.php",file_get_contents('../config.php').'
'.file_get_contents('https://raw.githubusercontent.com/noadslol/plugins/main/'.$_POST['p']))."</b>&c=green");
	die();
?>
