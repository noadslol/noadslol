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
  <div class="videos">
    <section class="video-section">
	<?php
	error_reporting(0);
		include("config.php");
echo '<h2 class="video-section-title">Trending</h2>
<p class="video-section-title">What people are loving right now.</p><br>';
$invidiousInstance = 'https://vid.puffyan.us';
$trending = @file_get_contents($invidiousInstance."/api/v1/trending");
if(isset($trending)){
$trending = json_decode($trending);
foreach ($trending as $value) {
$init = $value->lengthSeconds;
$hours = floor($init / 3600);
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;
    echo '<article class="video-container"><a href="watch.php?v='.$value->videoId.'" class="thumbnail" data-duration="'.$hours.':'.$minutes.':'.$seconds.'">
	<img class="thumbnail-image" src="https://i3.ytimg.com/vi/'.$value->videoId.'/maxresdefault.jpg">
	</a>
	<div class="video-bottom-section">
          <div class="video-details">
            <a href="watch.php?v='.$value->videoId.'" class="video-title">'.$value->title.'</a>
            <a href="search.php?q='.$value->author.'" class="video-channel-name">'.$value->author.'</a>
            <div class="video-metadata">
              <span>'.$value->viewCount.' views</span>
              •
              <span>'.$value->publishedText.'</span>
            </div>
          </div>
        </div>
      </article>';
}
}else{
	echo '<p>No Ads Lol is experiencing some technical difficulties getting the trending videos. Please reload the page. If the error persists, try again later.</p>';
}
	?>
    </section>
    <section class="video-section">
		<?php
	error_reporting(0);
		require("config.php");
echo '<h2 class="video-section-title">Music</h2>
<p class="video-section-title">What others are listening to.</p><br>';
$invidiousInstance = 'https://vid.puffyan.us';
$trending = @file_get_contents($invidiousInstance."/api/v1/search?q=Music");
if(isset($trending)){
$trending = json_decode($trending);
foreach ($trending as $value) {
$init = $value->lengthSeconds;
$hours = floor($init / 3600);
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;
    echo '<article class="video-container"><a href="watch.php?v='.$value->videoId.'" class="thumbnail" data-duration="'.$hours.':'.$minutes.':'.$seconds.'">
	<img class="thumbnail-image" src="https://i3.ytimg.com/vi/'.$value->videoId.'/maxresdefault.jpg">
	</a>
	<div class="video-bottom-section">
          <div class="video-details">
            <a href="watch.php?v='.$value->videoId.'" class="video-title">'.$value->title.'</a>
            <a href="search.php?q='.$value->author.'" class="video-channel-name">'.$value->author.'</a>
            <div class="video-metadata">
              <span>'.$value->viewCount.' views</span>
              •
              <span>'.$value->publishedText.'</span>
            </div>
          </div>
        </div>
      </article>';
}
}else{
	echo '<p>No Ads Lol is experiencing some technical difficulties getting the trending videos. Please reload the page. If the error persists, try again later.</p>';
}
	?>
	    </section>
    <section class="video-section">
			<?php
	error_reporting(0);
		include("config.php");
echo '<h2 class="video-section-title">News</h2>
<p class="video-section-title">What is happening in the world.</p><br>';
$invidiousInstance = 'https://vid.puffyan.us';
$trending = @file_get_contents($invidiousInstance."/api/v1/search?q=News");
if(isset($trending)){
$trending = json_decode($trending);
foreach ($trending as $value) {
$init = $value->lengthSeconds;
$hours = floor($init / 3600);
$minutes = floor(($init / 60) % 60);
$seconds = $init % 60;
    echo '<article class="video-container"><a href="watch.php?v='.$value->videoId.'" class="thumbnail" data-duration="'.$hours.':'.$minutes.':'.$seconds.'">
	<img class="thumbnail-image" src="https://i3.ytimg.com/vi/'.$value->videoId.'/maxresdefault.jpg">
	</a>
	<div class="video-bottom-section">
          <div class="video-details">
            <a href="watch.php?v='.$value->videoId.'" class="video-title">'.$value->title.'</a>
            <a href="search.php?q='.$value->author.'" class="video-channel-name">'.$value->author.'</a>
            <div class="video-metadata">
              <span>'.$value->viewCount.' views</span>
              •
              <span>'.$value->publishedText.'</span>
            </div>
          </div>
        </div>
      </article>';
}
}else{
	echo '<p>No Ads Lol is experiencing some technical difficulties getting the trending videos. Please reload the page. If the error persists, try again later.</p>';
}
	?>
</section>
	<center>
	<p><b>(C)2022-<?php
	echo date("Y");
	?> No Ads Lol, some rights reserved</b> | <b>Licensed to the general public under the BSD Version 3 license</b> | <b><a href="credits.php" target="_blank" rel="noopener noreferrer">A huge thanks!</a></b></p>
	</center>
  </div>
</body>
</html>
