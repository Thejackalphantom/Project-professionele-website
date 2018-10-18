<?php include ('functions/config.php');?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/home.css">
        <meta charset="UTF-8">
        <title>Archon Contact formulier</title>

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
            </div> <!-- END OF LEFT SIDE BAR-->
                <?php include('includes/header.php'); ?>
            <div id="middleContainer">
                
                <link rel="stylesheet" type="text/css" href="styles/contactform.css">
        

<style type="text/css"> </style>
</head>

<body>

<div id="stylized" class="myform">

<form id="form1" id="form1" action="mail.php" method="POST">

    <label>Naam
        <span class="small">Add your name</span>
    </label>
<input type="text" name="name">
    <label>Email adres
        <span class="small">Enter a Valid Email</span>
    </label>
<input type="text" name="email">
    <label>Telefoonnummer
        <span class="small">Add a Phone Number</span>
    </label>
<input type="text" name="phone">


<p id=dropdown">
    <label>Opleiding
        <span class="small">Course  </span>
    </label>

<select name="Course" size="1">
<option value="keuze1">Archelogie - glaciologie</option>
<option value="keuze2">Archelogie - bodemonderzoek</option>
<option value="keuze3">tourism - hotelmanagment</option>
<option value="keuze4">tourism - hospitality</option>
</select>
    
</p>



    <label>Typ je bericht
        <span class="small">Type Your Message</span>
    </label>
<textarea name="message" rows="6" cols="25"></textarea><br />

    <button type="submit" value="Send" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>

</form>

</div> <!-- end of form class -->
                
            </div> <!-- END OF MIDDLE CONTAINERS-->
            
                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
