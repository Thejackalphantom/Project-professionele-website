<?php include ('functions/config.php'); ?>
<!DOCTYPE html>
<!--
Fotoalbum Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/fotoalbum.css">
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
                <?php include('includes/header.php');?>
            <div id="middelContainer">
                <div id="boxfotos">
                    <div class="fotosize">
                        <h1> Fotoalbums </h1>
                        <div class="boxw">
                           
                            <div class="textinbox">
                                <a href='fotosonzeschool.php'>  <img src="img/file.jpg" alt="file"> <p> Onze school </p> </a> </div> 
                        </div>
                        <div class="boxw">
                            
                            <div class="textinbox">
                                <a href='fotosonzeopleidingen.php'> <img src="img/file.2.jpg" alt="file"> <p> Onze Opleidingen</p> </a>
                            </div>
                        </div>
                        <div class="boxtext">
                            <h2> upload je eigen foto's door <a href='inlogfoto.php'> <u> in te loggen. </u> </a> </h2>
                         </div>
                    </div>
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
    </body>
</html>