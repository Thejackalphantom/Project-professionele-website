<?php include ('functions/config.php');?>
<!DOCTYPE html>

<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <meta charset="UTF-8">
        <title><?php echo $lang['title'];//GETS THE TITLE?></title>
    </head>
    <body>
        <div id="mainContainer">
            <div id="sideBarLeft">
                <div id="logo">
                    <img src="img/kleur_logo.jpg" alt="Archon Hogeschool">
                </div>
            <?php include('includes/menuDoubt.php');?>  
            </div> <!-- END OF LEFT SIDE BAR-->
            <?php include('includes/header.php');?>
            <div id="middleContainer">
                <div id="textDoubt">
                    <h1><?php echo $lang['doubt_title_1']; ?></h1>
                    <p><?php echo $lang['doubt_body_1'];?></p>
                    <p><?php echo $lang['doubt_body_2'];?></p>
                </div>
                <div id="bigButton">
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
