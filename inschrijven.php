<?php include ('functions/config.php');?>
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
            </div> <!-- END OF LEFT SIDE BAR-->
        <?php include('includes/header.php');?>
            <div id="middleContainer">
              <div class="form_main">
                <form id="inschrijven.php">
                  <div class="form_header">
                    <h1>  <?php echo $lang['enroll_title_1'];?> </h1>
                  </div>
                  <p>

                  </p>
                  <p>

                  </p>
                  <div class="form_row">
                    <span>
                         <?php echo $lang['enroll_education_1'];?>
                    </span>
                    <select>
                      <option><?php echo $lang['enroll_education_2'];?></option>
                      <option value="arch_1"><?php echo $lang['enroll_choice_1'];?></option>
                      <option value="arch_2"><?php echo $lang['enroll_choice_2'];?></option>
                      <option value="tour_1"><?php echo $lang['enroll_choice_3'];?></option>
                      <option value="tour_2"><?php echo $lang['enroll_choice_4'];?></option>
                    </select>
                  </div>
                  <div class="form_row">
                    <span>
                      <?php echo $lang['enroll_form_firstname'];?>
                    </span>
                    <input type='text' name='firstname'>
                  </div>
                  <div class="form_row">
                    <span>
                      <?php echo $lang['enroll_form_lastname'];?>
                    </span>
                    <input type='text' name='lastname'>
                  </div>
                  <div class="form_row">
                    <span>
                      <?php echo $lang['enroll_form_city'];?>
                    </span>
                    <input type='text' name='city'>
                  </div>
                  <div class="form_row">
                    <span>
                      <?php echo $lang['enroll_form_streetname'];?>
                    </span>
                    <input type='text' name='streetname'>
                  </div>
                  <input class="form_input" type="submit">
                </form>
              </div>

            </div> <!-- END OF MIDDLE CONTAINERS-->
            <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
