<?php include ('functions/config.php'); ?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/homeform.css">
        <link rel="stylesheet" type="text/css" href="styles/contactform.css">
        <meta charset="UTF-8">
        <title><?php echo $lang['title']; //GETS THE TITLE  ?></title>

    </head>
    <body>
        <div id="mainContainer">
            <div id="sideBarLeft">
                <div id="logo">
                    <a href='index.php'>
                        <img src="img/kleur_logo.jpg" alt="Archon Hogeschool">
                    </a>
                </div>
                <?php include('includes/menu.php'); ?>
            </div> <!-- END OF LEFT SIDE BAR-->
            <?php include('includes/header.php'); ?>
            <div id="middleContainer">
                    <div id="stylized" class="myform">
                        <form id="form1" action="Mail.php" method="POST">
                            <label>
                                <?php echo $lang['enroll_form_firstname'];?>
                            </label>
                            <input type="text" name="name">
                            <label>
                                Email 
                            </label>
                            <input type="text" name="email">
                            <label>
                                <?php echo $lang['telnumber'];?>
                            </label>
                            <input type="text" name="phone">
                            <p id="dropdown">
                                <label>
                                    <?php echo $lang['enroll_education_1'];?>
                                </label>
                                <select name="Course" size="1">
                                    <option value="keuze1" label="1"><?php echo $lang['enroll_choice_1'];?></option>
                                    <option value="keuze2" label="2"><?php echo $lang['enroll_choice_2'];?></option>
                                    <option value="keuze3" label="3"><?php echo $lang['enroll_choice_3'];?></option>
                                    <option value="keuze4" label="4"><?php echo $lang['enroll_choice_4'];?></option>
                                </select>
                            </p>
                            <label>
                                <?php echo $lang['bericht'];?>
                            </label>
                            <textarea name="message" rows="6" cols="25"></textarea><br />
                            <button type="submit" name ="submit" value="Send" style="margin-top:15px;">Submit</button>
                            <div class="spacer"></div>
                        </form>
                    </div> <!-- end of form class -->
            </div> <!-- END OF MIDDLE CONTAINERS-->
                <?php include('includes/footer.php'); ?>
        </div> <!-- END OF MAIN CONTAINERS-->
    </body>
</html>
