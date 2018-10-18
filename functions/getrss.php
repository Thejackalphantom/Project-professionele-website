<link rel='stylesheet' type='text/css' href='styles/rss.css'>
<?php
$url = 'https://news.google.com/news/rss/search/section/q/onderwijs?ned=us&gl=US&hl=en';
$xml=simplexml_load_file($url) or die("Error: Cannot create object");

// print_r($xml->channel->item[0]);
// exit;
for($x = 0,$y = 4; $x < $y; $x++){
    echo "<a href='" . $xml->channel->item[$x]->link . "'><div class='news_title'>";
    echo ($xml->channel->item[$x]->title);
    echo "</div></a>";


    echo "<div class='news_date'>";
    echo substr($xml->channel->item[$x]->pubDate, 5, -17);
    echo substr($xml->channel->item[$x]->pubDate, 16, -7);
    echo "</div>";
    if($x < ($y - 1)){
      echo '<hr>';
    }
}

?>
