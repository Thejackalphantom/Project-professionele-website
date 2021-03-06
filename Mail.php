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
            </div> <!-- END OF LEFT SIDE BAR-->
            <?php include('includes/header.php'); ?>
            <div id="middleContainer">
                <h2> <?php echo $lang['response'];?>.</h2>
                <?php
                if (isset($_POST['submit'])) {
                    $to = "thijsvanderwall@live.nl"; // this is your Email address
                    $from = $_POST['email']; // this is the sender's Email address
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $subject = "Form submission";
                    $subject2 = "Copy of your form submission";
                    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
                    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
                    $headers = "From:" . $from;
                    $headers2 = "From:" . $to;
                    mail($to, $subject, $message, $headers);
                    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
                   
                    // You can also use header('Location: thank_you.php'); to redirect to another page.
                    // You cannot use header and echo together. It's one or the other.
                }
                ?>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <?php include('includes/footer.php'); ?>
        </div> <!-- END OF MAIN CONTAINERS-->
    </body>
</html>
