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
                        <?php include('includes/menu.php');?>
                        <!-- END OF MENU FILLER-->
            </div> <!-- END OF LEFT SIDE BAR-->
        <?php include('includes/header.php');?>
            <div id="middleContainer">
              <div class="form_main">
                <form id="inschrijven.php">
                  <div class="form_header">
                    <h1>  <?=PAGEHEADER?> </h1>
                  </div>
                  <p>

                  </p>
                  <p>

                  </p>
                  <div class="form_row">
                    <span>
                         <?=EDUCATION_1?>
                    </span>
                    <select>
                      <option><?=EDUCATION_2; ?></option>
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

            <div id="footer">
                <span><?php echo CONTENT_FOOTER_DISCLAIMER; ?></span>
            </div> <!-- END OF FOOTER-->
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
