<?php include ('functions/config.php');
//GETS THE CONFIG.PHP FILE WHERE THE SESSION WILL BE MADE AND CHECK WHICH LANGUAGE IS SET?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/nieuws.css">
        <meta charset="UTF-8">
        <title><?php echo $lang['title'];//GETS THE TITLE?></title>
    </head>
    <body>
        <div id="mainContainer">
                <div id="sideBarLeft">
                    <div id="logo">
                        <img src="img/kleur_logo.jpg" alt="Archon Hogeschool">
                    </div>
                    <?php include('includes/menu.php');//INCLUDES THE MENU.PHP WHERE THE MENU IS LOCATED?>
                </div> <!-- END OF LEFT SIDE BAR-->
                <?php include('includes/header.php'); //INCLUDES THE HEADER.PHP FILE?>
                <div id="middleContainer"><!-- BEGIN OF MIDDLE CONTAINER INSERT YOUR DATA IN THIS BOX(MODEL)-->
                  <div class='nieuws_titel'>
                        <?php echo $lang['news_title'];?>
                  </div>
                  <div class='nieuws_artikel'>
                    <div class='nieuws_artikel_titel'>
                        <?php echo $lang['news_artikel_title'];?>
                    </div>
                    <div class='nieuws_artikel_inhoud'>
                        <?php echo $lang['news_artikel_text'];?>
                    </div>
                  </div>
                  <div class='nieuws_artikel'>
                    <div class='nieuws_artikel_titel'>
                        <?php echo $lang['news_artikel_title_2'];?>
                    </div>
                    <div class='nieuws_artikel_inhoud'>
                        <?php echo $lang['news_artikel_text_2'];?>
                    </div>
                  </div>
                </div> <!-- END OF MIDDLE CONTAINERS  -->
                <div id="sideBarRight">
                    <?php include('includes/rss.php');//INCLUDES THE RSS.PHP FILE WHERE THE RSS FEET IS GETTING IMPLEMENTED FROM?>
                </div>
                <?php include('includes/footer.php');// INCLUDES THE FOOTER.PHP FILE FOR THE FOOTER?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
