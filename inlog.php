<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>
<!--
Login Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/inlog.css">
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
            </div>
               <?php include('includes/header.php'); ?>
            <div id="middleContainer">
                
                
                
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <div id="sideBarRight">
                <?php include('includes/rss.php');?>
            </div>
                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>