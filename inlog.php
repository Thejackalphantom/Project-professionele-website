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
                <h2>Login Form</h2>
                    <form action="/action_page.php">
                     
                      <div class="container">
                          <p> <b>Username</b></p>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <p><b>Password</b></p>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit">Login</button>
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                      </div>
                    </form>

            </div> <!-- END OF MIDDLE CONTAINERS-->
            <div id="sideBarRight">
               
            </div>
                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>