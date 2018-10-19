<?php include ('functions/config.php');?>
<!DOCTYPE html>
<!--
Login Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/inlog.css">
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
                <h2>Login</h2>
                    <form action="/ppw/loggedin.php" method="POST">
                     
                      <div class="container">
                          <p> <b>Username</b></p>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <p><b>Password</b></p>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                        
                        <button type="submit">Login</button>
                      </div>
                    </form>

            </div> <!-- END OF MIDDLE CONTAINERS-->
            <div id="sideBarRight">
               
            </div>
                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>