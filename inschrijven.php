<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/inschrijven.css">
        <meta charset="UTF-8">
        <title>Archon Hogeschool</title>

    </head>
    <body>
        <div id="mainContainer">
            <div id="sideBarLeft">
                <div id="logo">
                  <a href='index.php'>
                    <img src="img/kleur_logo.jpg" alt="Archon Hogeschool">
                  </a>
                </div>
                        <?php include('menu.php');?>
                        <!-- END OF MENU FILLER-->
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
                <div id="menuPNG">
                    <img src="img/menu.png" alt="menu">
                </div>
            </div> <!-- END OF HEADER -->
            <div id="middleContainer">
              <div class="form_main">
                <form id="inschrijven.php">
                  <div class="form_header">
                    <h1> Inschrijven </h1>
                  </div>
                  <p>

                  </p>
                  <p>

                  </p>
                  <div class="form_row">
                    <span>
                         Opleiding
                    </span>
                    <select>
                      <option><?=EDUCATION; ?></option>
                      <option value="arch_1"><?=EDU_1; ?></option>
                      <option value="arch_2"><?=EDU_2; ?></option>
                      <option value="tour_1"><?=EDU_3; ?></option>
                      <option value="tour_2"><?=EDU_4; ?></option>
                    </select>
                  </div>
                  <div class="form_row">
                    <span>
                      <?=FIRSTNAME; ?>
                    </span>
                    <input type='text' name='firstname'>
                  </div>
                  <div class="form_row">
                    <span>
                      <?=LASTNAME; ?>
                    </span>
                    <input type='text' name='lastname'>
                  </div>
                  <div class="form_row">
                    <span>
                      <?=CITY; ?>
                    </span>
                    <input type='text' name='city'>
                  </div>
                  <div class="form_row">
                    <span>
                      <?=STREETNAME; ?>
                    </span>
                    <input type='text' name='streetname'>
                  </div>
                  <input class="form_input" type="submit">
                </form>
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
