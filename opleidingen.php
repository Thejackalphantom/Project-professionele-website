<?php include ('functions/config.php');?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/opleidingen.css">
        <meta charset="UTF-8">
        <title><?php echo $lang['title'];//GETS THE TITLE?></title>
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
            <?php include('includes/header.php'); ?>
            <div id="middleContainer">
              <div class='opleidingen'>
                <div class='opleidingen_title'>
                    <?php echo $lang['course_arch'];?>
                </div>
                <div class='opleidingen_subtitle'>
                    <?php echo $lang['course_glac'];?>
                </div>
                <div class='opleidingen_text'>
                    <?php echo $lang['course_glac_info'];?>
                </div>
              </div>
              <div class='opleidingen'>
                <div class='opleidingen_title'>
                    <?php echo $lang['course_arch'];?>
                </div>
                <div class='opleidingen_subtitle'>
                    <?php echo $lang['course_soil'];?>
                </div>
                <div class='opleidingen_text'>
                    <?php echo $lang['course_soil_info'];?>
                </div>
              </div>
              <div class='opleidingen'>
                <div class='opleidingen_title'>
                    <?php echo $lang['course_tour'];?>
                </div>
                <div class='opleidingen_subtitle'>
                    <?php echo $lang['course_hotel'];?>
                </div>
                <div class='opleidingen_text'>
                    <?php echo $lang['course_hotel_info'];?>
                </div>
              </div>
              <div class='opleidingen'>
                <div class='opleidingen_title'>
                    <?php echo $lang['course_tour'];?>
                </div>
                <div class='opleidingen_subtitle'>
                    <?php echo $lang['course_hosp'];?>
                </div>
                <div class='opleidingen_text'>
                    <?php echo $lang['course_hosp_info'];?>
                </div>
              </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
