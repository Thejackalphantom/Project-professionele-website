<?php include ('functions/config.php');?>
<!DOCTYPE html>
<!--
Logged-in page Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/loggedin.css">
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
               <?php include('includes/headerLOG.php'); ?>
            
                <?php

                    if (!empty($_POST)){
                        $user= $_POST["uname"];  
                        $pass= $_POST["psw"];
                        if ($user === "admin" && $pass === "1234"){
                            header("Location: loggedin.php");
                        }  
                        else{
                            header("Location: inlog.php"); 
                        }
                    }
                   ?>
            <div id="middleContainer">
                <div id="middleSpaceUp">   
                </div>
                <div id="welcome"> 
                    <div id="welcomeLeft">  
                    </div>
                    <h1> <?php echo $lang['login_1']; ?> </h1> <!-- Welcome!-->
                </div>  
                
                <div id="welcomeMiddle">  
                </div>
                <div id="welcome"> 
                    
                </div>
                <div id="infoLeft">
                    <div id="infoPic">
                        <img src="img/blank.jpg" alt="profile picture">
                    </div>
                </div>
                <div id="infoMid">  
                    <h2> <?php echo $lang['login_2']; ?> </h2>  <!-- Information student -->
                    <p> <?php echo $lang['login_3']; ?> </p>    <!-- First name: -->
                    <p> <?php echo $lang['login_4']; ?>  </p>   <!-- Last name: -->
                    <p> <?php echo $lang['login_5']; ?></p>     <!-- Adress: -->
                    <p> <?php echo $lang['login_6']; ?> </p>    <!-- Course: -->   
                    <a href='eigenfotosprof.php'> <p> Uw foto's </p> </a>
                </div>


            </div> <!-- END OF MIDDLE CONTAINERS-->

                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
