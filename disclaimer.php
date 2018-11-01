<?php include ('functions/config.php');?>
<!DOCTYPE html>
<!--
Disclaimer Project Professionele Website
-->
<html lang="nl-NL">
    <head>
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
                        <p>Argon hogeschool doet haar best om ontbrekende zaken en wijzigingen in het aanbod voor de opleidingen en hun presentatie en beschrijvingen zo snel mogelijk op de website door te voeren. Heb je vragen over de inhoud of kom je iets tegen dat niet correct of niet duidelijk is? Vul dan het contact formulier in.</p>

                    <h2>Copyright</h3>
                        <p>Deze website is beschermd door het auteursrecht en andere intellectuele eigendomsrechten. Inhoud van deze website mag je alleen kopiëren, citeren en openbaar maken voor persoonlijk en niet-commercieel gebruik en met volledige bronvermelding.</p>    
                </div>
                

            </div> <!-- END OF MIDDLE CONTAINERS-->
           
                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>