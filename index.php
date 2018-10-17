<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/home.css">
        <meta charset="UTF-8">
        <title>Archon Hogeschool</title>

    </head>
    <body>
        <div id="mainContainer">
            <div id="sideBarLeft">
                <div id="logo">
                    <img src="img/kleur_logo.jpg" alt="Archon Hogeschool">
                </div>
                      <?php include('includes/menu.php');?>
            </div> <!-- END OF LEFT SIDE BAR-->
                <?php include('includes/header.php'); ?>
            <div id="middleContainer">
                <div id="bigButton">
                    <p><?=CONTENT_BIG_BUTTON; ?></p>
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <div id="sideBarRight">
            </div>
            <div id="footer">

                <div id="footerBlankSpaceUp">   
                </div>
                
                <div id="footerBlankSpaceLeft">   
                </div>
                
                <div id="footerContainer"> 
                    <div id="footerInfo">   
                        <p class="TextChangeWhite"> Over Archon Hogeschool </p>
                    </div>
                    <div id="footerInfo">   
                        <p class="TextChangeWhite"> Contact </p>
                    </div>
                    <div id="footerInfo">   
                        <p class="TextChangeWhite"> Disclaimer </p>
                    </div>
                    <div id="footerInfo"> 
                        <p class="TextChangeWhite"> <?=CONTENT_FOOTER_DISCLAIMER; ?></p>
                    </div>
                </div>
                
                <div id="footerSpacer">   
                </div>

                <div id="footerSpaceLeftOfSpacer">   
                </div>
                
                <div id="footerContainerSecond">
                
                <div class="search">
                    <input type="text" placeholder=<?=CONTENT_SEARCH; ?>>
                </div>
                <div id="footerRight">
                    <div class="footerIcon">
			<a href="http://facebook.nl" target="_blank"><img src="img/facebook.png" alt="Facebook"></a>
                    </div>
                    <div class="footerIcon">
			<a href="http://twitter.com" target="_blank"><img src="img/twitter.png" alt="Twitter"></a>
                    </div>
                    <div class="footerIcon">
			<a href="https://www.instagram.com" target="_blank"><img src="img/insta.png" alt="Instagram"></a>
                    </div>
                </div>
                
                </div>

                
            </div> <!-- END OF FOOTER-->
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
