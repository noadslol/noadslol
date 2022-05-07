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
<center>
<?php
require("config.php");
if(!isset($_GET['v'])){
	header("Location: index.php");
	die();
}else{
	$rawVid = @file_get_contents('https://maadhav-ytdl.herokuapp.com/video_info.php?url=https://www.youtube.com/watch?v='.$_GET['v']);
	$rawVid = @json_decode($rawVid);
	if(isset($rawVid->links[0])){
		$head = @get_headers($rawVid->links[0]);
		if($head && strpos( $head[0], '403')) {
    echo '<iframe src="https://vid.puffyan.us/embed/'.$_GET['v'].'" style="border:0px #ffffff none;" name="invidiousThrottling" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="100%" width="100%" allowfullscreen onload="this.width=screen.width;this.height=screen.height;"></iframe>';
}
else {
    		echo '<video width="100%" height="100%" controls autoplay>
  <source src="'.$rawVid->links[0].'" type="video/mp4">
</video>';

}
	}else{
		    echo '<iframe src="https://vid.puffyan.us/embed/'.$_GET['v'].'" style="border:0px #ffffff none;" name="invidiousThrottling" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="100%" width="100%" allowfullscreen onload="this.width=screen.width;this.height=screen.height;"></iframe>';

	}
	$tags = @get_meta_tags('http://www.youtube.com/watch?v='.$_GET['v']);
	if(isset($tags['title'])){
			$title = $tags['title'];
	$desc = $tags['description'];
	echo '</center><h2>'.$title.'</h2><p>'.$desc.'</p>';

	}else{
		echo '</center><h2>Cannot obtain title and description</h2><p>No Ads Lol is unable to scrape the META tags to display the title and description of this video.</p>';
	}
	}
?>
	<center>
	<p><b>(C)2022-<?php
	echo date("Y");
	?> No Ads Lol, some rights reserved</b> | <b>Licensed to the general public under the BSD Version 3 license</b> | <b><a href="credits.php" target="_blank" rel="noopener noreferrer">A huge thanks!</a></b></p>
	</center>
  </div>
</body>
</html>
