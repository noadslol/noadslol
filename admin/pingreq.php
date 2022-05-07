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
  <h1>Ping Requests</h1>
  <h2><a href="panel.php">Return to Admin Panel</a></h2>
  <?php
  include('../config.php');
  echo '<h3>Invidious API and Embed</h3>';
$output = shell_exec("ping vid.puffyan.us");
echo "<pre>$output</pre>";
  echo '<h3>Public Metadata</h3>';
$output = shell_exec("ping www.youtube.com");
echo "<pre>$output</pre>";
  echo '<h3>Github</h3>';
$output = shell_exec("ping www.github.com");
echo "<pre>$output</pre>";
?>

	<center>
	<p><b>(C)2022-<?php
	echo date("Y");
	?> No Ads Lol, some rights reserved</b> | <b>Licensed to the general public under the BSD Version 3 license</b> | <b><a href="../credits.php" target="_blank" rel="noopener noreferrer">A huge thanks!</a></b></p>
	</center>
  </div>
</body>
</html>
