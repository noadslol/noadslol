<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <title>No Ads Lol</title>
</head>
<?php
require("config.php");
?>
<body>
  <header class="header">
    <a href="index.php">
      <img src="logo.png" alt="No Ads Lol Logo" class="youtube-logo" />
    </a>
    <form class="search-bar" method="get" action="search.php">
      <input class="search-input" type="search" placeholder="What do you want to watch?" aria-label="Search" name="q" id="q" required/>
      <button type="submit" class="search-btn">
        <img src="magnify.svg" />
      </button>
    </form>
    <div class="menu-icons">
	   <a href="admin/panel.php" target="_blank" rel="noopener noreferrer">
        <img src="apps.svg" alt="Admin Panel" />
      </a>
    </div>
  </header>
  <?php
  error_reporting(0);
echo file_get_contents('https://raw.githubusercontent.com/noadslol/plugins/main/randPhrase.txt');
?>
  <h2>Thanks for using No Ads Lol!</h2>
  <p>Although the No Ads Lol developer coded No Ads Lol, it wouldn't be possible without the following assets...</p>
  <ul>
  <li><b>maadhav-ytdl</b> (used to display video, if unavalible throttles to Invidious Embed)</li>
  <li><b>Invidious API</b> (used to fetch video titles, creators, views and uploaded times)</li>
  <li><b>Invidious Embed</b> (used to show video if the ytdl frame is not avalible)</li>
  <li><b>Public Metadata</b> (used to display video titles and descriptions)</li>
  <li><b>Github</b> (used to host the No Ads Lol files for people to download)</li>
  </ul>
  <p>No Ads Lol is provided to the general public under the BSD Version 3 license. Please refer to the <b>LICENSE</b> file at <b>noadslol/noadslol</b> on Github for more info.</p>
	<center>
	<p><b>(C)2022-<?php
	echo date("Y");
	?> No Ads Lol, some rights reserved</b> | <b>Licensed to the general public under the BSD Version 3 license</b> | <b><a href="credits.php" target="_blank" rel="noopener noreferrer">A huge thanks!</a></b></p>
	</center>
  </div>
</body>
</html>
