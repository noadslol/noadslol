<?php
require("config.php");
if(isset($_POST['cmd'])){
	$resp = shell_exec($_POST['cmd']);
	$terminal = $_POST['t'].'
-> '.$_POST['cmd'].'
'.$resp;
}
?>
<center>
<title>Terminal</title>
<form action="terminal.php" id="term" method="post">
<textarea name="t" id="t" form="term" readonly style="width: 100%;height: 95%; "><?php
if(isset($terminal)){
	echo $terminal;
}else{
echo '///////////////////////////////////////
NO ADS LOL TERMINAL - SHELL
Operating System (OS): '.php_uname().'

WARNING! Shell commands entered will be executed to your OS. Only run commands if you know what they do!
///////////////////////////////////////';
}
?></textarea>
<input type="text" name="cmd" required><input type="submit" value="Execute">
</form>
</center>
