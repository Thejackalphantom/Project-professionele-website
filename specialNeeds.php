<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>

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
               <?php include('includes/menuSpecial.php');?>  
            </div> <!-- END OF LEFT SIDE BAR-->
            <?php include('includes/header.php'); ?>
            <div id="middleContainer">
                <div id="textSpecial">
                    <h1><?=TEXT_BLOCK_1?></h1>
                    <p><?=TEXT_MAIN?></p>
                    <p><?=TEXT_MAIN_2?></p>
                     <p><?=TEXT_MAIN_3?></p>
                </div>
                <!--                Hier typen--> 
                    
                <div id="bigButton">
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <div id="sideBarRight">
            </div>
         <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
