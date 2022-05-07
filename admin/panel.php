<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>No Ads Lol</title>
</head>
<body>
  <header class="header">
    <a href="../index.php">
      <img src="../logo.png" alt="No Ads Lol Logo" class="youtube-logo" />
    </a>
  </header>
  <h1>Admin Panel</h1>
  <?php
  include('../config.php');
  if(isset($_GET['m']) && isset($_GET['c'])){
	  echo '<p style="color:'.$_GET['c'].';">'.$_GET['m'].'</p>';
  }
  ?>
  <h2>Get Plugins</h2>
  <p>Installed plugins will be added to your config.php. If you want to remove a plugin, you have to remove its code from the config.php.</p>
  <form action="plugin.php" id="form2" method="post">
  <select name="p" id="p">
  <option disabled selected>--Connected to noadslol/plugins--</option>
<?php
echo file_get_contents('https://raw.githubusercontent.com/noadslol/plugins/main/select.txt');
?>
</select>
<input type="submit" value="Install Plugin">
</form>
  <h2>Edit config.php</h2>
  <p>The config.php file is included on every page (including the admin panel). If you want to inject a script, you can use the config.php to do it.</p>
  <form action="updateconfig.php" id="form" method="post">
  <textarea name="conf" form="form"  rows="15" cols="100"><?php
  echo file_get_contents("../config.php");
  ?></textarea>
<input type="submit" value="Update config.php">
</form>
<h2>Ping The APIs</h2>
<p>Are videos not appearing, are you experiencing an error or do you just want to see how fast the APIs load content? Send a ping request to see what's online.</p>
<a href="pingreq.php"><button>Send Ping Request</button></a>
<h2>Terminal</h2>
<p>Do you know how to use shell commands on your OS? You can execute shell commands in No Ads Lol's terminal. (Are you a Windows user? You can run <b>cmd.exe</b> in the shell to be able to run Command Prompt commands, run <b>exit</b> to go back into shell mode.)</p>
<a href="terminal.php" target="popup" onclick="window.open('terminal.php','popup','width=600,height=600'); return false;"><button>Open Terminal</button></a>
	<center>
	<p><b>(C)2022-<?php
	echo date("Y");
	?> No Ads Lol, some rights reserved</b> | <b>Licensed to the general public under the BSD Version 3 license</b> | <b><a href="../credits.php" target="_blank" rel="noopener noreferrer">A huge thanks!</a></b></p>
	</center>
  </div>
</body>
</html>
