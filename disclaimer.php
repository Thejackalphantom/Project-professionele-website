<?php include ('functions/config.php');?>
<!DOCTYPE html>
<!--
Disclaimer Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/disclaimer.css">
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
            </div>
            <?php include('includes/header.php'); ?>
            <div id="middleContainer">
                <div id="middleSpaceLeft">
                </div>
                <div id="middleText">
                    <h1> Disclaimer </h1>
                        <p>
                            <?php echo $lang['disclaimer']; ?>
                        </p>
                    <h2>Copyright</h2>
                        <p>
                            <?php echo $lang['copyright']; ?>
                        </p>    
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>