<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
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
                        <p><?=CONTENT_MENU_1; ?></p>
                        <p><?=CONTENT_MENU_2; ?></p>
                        <p><?=CONTENT_MENU_3; ?></p>
                        <p><?=CONTENT_MENU_4; ?></p>
                    </div>
                </div> <!-- END OF MENU FILLER-->
            </div> <!-- END OF LEFT SIDE BAR-->
            <div id="header">
                <div id="headerContainer">
                </div>
                <div class="headerInlog">
                    <p class="biggerText"><?=CONTENT_MENU_LOGIN; ?></p>
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
                <div class="dropdown" id="hamburger">
                        <div class="dropdown">
                            <p id="menuTextChange"> MENU </p>
                            <div class="dropdown-content">
                              <a href="www.google.com"> <p><?=CONTENT_HAMBURGER_NEWS; ?></p> </a>
                              <a href="www.google.com"> <p><?=CONTENT_MENU_1; ?></p> </a>
                              <a href="www.google.com"> <p><?=CONTENT_MENU_2; ?></p> </a> 
                              <a href="www.google.com"> <p><?=CONTENT_MENU_3; ?></p> </a>
                              <a href="www.google.com"> <p><?=CONTENT_MENU_4; ?></p> </a>
                            </div>
                        </div>
                    <div id="hamburgerBox">
                    <div class="hamburgerButton">
                    </div>
                    <div class="hamburgerButton">
                    </div>
                    <div class="hamburgerButton">      
                    </div>
                    </div>


                    </div>
                
                  <div id="hamburgerRightSpace">
                  </div>
                  <div id="hamburgerUnderSpace">
                  </div>
                  
            </div> <!-- END OF HEADER -->
            <div id="middleContainer">
                <img src="img/banner1.png" alt="Studenten"> 
                <div id="bigButton">
                    <p><?=CONTENT_BIG_BUTTON; ?></p>
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <div id="sideBarRight">
            </div>
            <div id="footer">
                <span><?=CONTENT_FOOTER_DISCLAIMER; ?></span>
            </div> <!-- END OF FOOTER-->
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
