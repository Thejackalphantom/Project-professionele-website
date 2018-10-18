<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>
<!--
Fotoalbum Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/fotoalbum.css">
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
                <?php include('includes/header.php');?>
            
            <div id="boxfotos">
            <div id="middelContainer">
             <div class="fotosize">
                 <img src="img/file.jpg" alt="file">
             </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            </div>
            <div id="sideBarRight">
            </div>
                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
    
    
    
    
    
    </body>
</html>