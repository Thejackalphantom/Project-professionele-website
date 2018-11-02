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
                        <h1>Foto's onze school</h1>
                        <div class="boxwfotos">
                            <img src="img/imgs1.jpg" alt="file">
                        </div>
                        <div class="boxwfotos">
                            <img src="img/imgs2.jpg" alt="file"> 
                        </div>                      
                       <div class="boxwfotos">
                            <img src="img/imgs3.jpg" alt="file">                         
                        </div>                      
                        <div class="boxwfotos">
                            <img src="img/imgs4.jpg" alt="file">                          
                        </div>                      
                        <div class="boxwfotos">
                            <img src="img/imgs5.jpg" alt="file">                           
                        </div>
                        <div class="boxwfotos">
                            <img src="img/imgs6.jpg" alt="file">                        
                        </div>
                        <div class="boxwfotos">
                            <img src="img/imgs7.jpg" alt="file">                         
                        </div>                 
                        <div class="boxtexten">
                            <h2> Binnenkort meer fotos..</h2>                    
                            <div class="boxtexten">
                                <a href='Fotoalbum.php'><h2><u>Terug naar fotos ◄</u><h2></a>
                            </div>
                        </div>      
                    </div>
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
    </body>
</html>