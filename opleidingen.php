<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/opleidingen.css">
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
              <div class='opleidingen'>
                <div class='opleidingen_title'>
                  Archelologie
                </div>
              </div>

            </div> <!-- END OF MIDDLE CONTAINERS-->
                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
