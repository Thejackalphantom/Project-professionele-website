<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta charset="UTF-8">
        <title>Archon Hogeschool</title>
        
    </head>
    <body>
        <div id="mainContainer">
            <div id="sideBarLeft">
                <div id="logo">
                    <img src="img/kleur_logo.jpg" alt="Archon Hogeschool">
                </div>
                <div id="menuFiller">
                    <div id="menu">
                        <p><?php echo CONTENT_MENU_1; ?></p>
                        <p><?php echo CONTENT_MENU_2; ?></p>
                        <p><?php echo CONTENT_MENU_3; ?></p>
                        <p><?php echo CONTENT_MENU_4; ?></p>
                    </div>
                </div> <!-- END OF MENU FILLER-->
            </div> <!-- END OF LEFT SIDE BAR-->
            <div id="header">
                <div id="headerContainer">
                </div>
                <div class="headerInlog">
                    <p class="biggerText"><?php echo CONTENT_MENU_LOGIN; ?></p>
                </div>
                <div id="headerSpace">
                </div>
                <div class="headerInlog">
                    <div class="headerFlagNL">
                        <a href="?lang=nl"><img src="img/nl.jpg" alt="NL"></a>
                    </div>
                    <div class="headerFlagSpace">   
                    </div>
                    <div class="headerFlagENG">
                        <a href="?lang=en"><img src="img/eng.jpg" alt="ENG"></a>
                    </div>                    
                </div> <!-- END OF HEADER INLOG-->
                <div id="headerContainer2">
                </div>
                <div class="headerWhiteSpace">    
                </div>
                <div class="headerWhiteSpace2">    
                </div>
                <div class="searchSpace">    
                    <div class="search">
                        <input type="text" placeholder="Search..">
                    </div>
                </div>
                <div id="menuSpace">
                </div>
                <div id="hamburger">
                    <div class="hamburgerButton">
                    </div>
                    <div class="hamburgerButton">
                    </div>
                    <div class="hamburgerButton">
                    </div>
                </div>
                <div id="hamburgerRightSpace">
                    <p id="menuTextChange"> MENU </p>
                </div>
                <div id="hamburgerUnderSpace">
                </div>
            </div> <!-- END OF HEADER -->
            <div id="middleContainer">
                <div id="bigButton">
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <div id="sideBarRight">
            </div>
            <div id="footer">
                <span><?php echo CONTENT_FOOTER_DISCLAIMER; ?></span>
            </div> <!-- END OF FOOTER-->
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
