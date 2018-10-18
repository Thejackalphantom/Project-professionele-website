<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="styles/contactform.css">
        <meta charset="UTF-8">
<title>Contact Formulier Archon</title>

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

<br />
<br />

    <label>Prioriteit
        <span class="small">Priority level  </span>
    </label>

<select name="priority" size="1">
<option value="Low">Laag</option>
<option value="Normal">Normaal</option>
<option value="High">Hoog</option>
<option value="Emergency">Noodgeval</option>
</select>

<br />
<br />
<br />


    <label>Typ je bericht
        <span class="small">Type Your Message</span>
    </label>
<textarea name="message" rows="6" cols="25"></textarea><br />

    <button type="submit" value="Send" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>

</form>

</div> <!-- end of form class -->

</body>
</style>
</html>