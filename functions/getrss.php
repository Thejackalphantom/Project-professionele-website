<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='styles/rss.css'>
    </head>
    <body>
        <?php
            set_error_handler(function() { /* ignore errors */ });
            $url = 'https://news.google.com/news/rss/search/section/q/hogeschool?ned=us&gl=US&hl=en';
            // $url = 'testniks.xml';
            $xml=simplexml_load_file($url);
            if(empty($xml)){
              echo 'er waren prolemen met het ophalen van de nieuws items';
            }else{
              for($x = 0,$y = 5; $x < $y; $x++){
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
            }
            restore_error_handler();
        ?>
    </body>
</html>

