<?php require_once ('functions/functions.php'); ?>
<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html lang="nl-NL">
    <head>
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="stylesheet" type="text/css" href="styles/opleidingen.css">
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
            </div> <!-- END OF LEFT SIDE BAR-->
                <?php include('includes/header.php'); ?>
            <div id="middleContainer">

              <div class='opleidingen'>
                <div class='opleidingen_title'>
                  <?=COURSE_1; ?>
                </div>
                <div class='opleidingen_subtitle'>
                    <?=COURSE_1_1; ?>
                </div>
                <div class='opleidingen_text'>
                  Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.
                  Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw,
                  toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken.
                  Het heeft niet alleen vijf eeuwen overleefd maar is ook,
                  vrijwel onveranderd, overgenomen in elektronische letterzetting.
                </div>
              </div>
              <div class='opleidingen'>
                <div class='opleidingen_title'>
                  <?=COURSE_1; ?>
                </div>
                <div class='opleidingen_subtitle'>
                    <?=COURSE_1_2; ?>
                </div>
                <div class='opleidingen_text'>
                  Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.
                  Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw,
                  toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken.
                  Het heeft niet alleen vijf eeuwen overleefd maar is ook,
                  vrijwel onveranderd, overgenomen in elektronische letterzetting.
                </div>
              </div>
              <div class='opleidingen'>
                <div class='opleidingen_title'>
                  <?=COURSE_2; ?>
                </div>
                <div class='opleidingen_subtitle'>
                    <?=COURSE_2_1; ?>
                </div>
                <div class='opleidingen_text'>
                  Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.
                  Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw,
                  toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken.
                  Het heeft niet alleen vijf eeuwen overleefd maar is ook,
                  vrijwel onveranderd, overgenomen in elektronische letterzetting.
                </div>
              </div>
              <div class='opleidingen'>
                <div class='opleidingen_title'>
                  <?=COURSE_2; ?>
                </div>
                <div class='opleidingen_subtitle'>
                    <?=COURSE_2_2; ?>
                </div>
                <div class='opleidingen_text'>
                  Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.
                  Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw,
                  toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken.
                  Het heeft niet alleen vijf eeuwen overleefd maar is ook,
                  vrijwel onveranderd, overgenomen in elektronische letterzetting.
                </div>
              </div>

            </div> <!-- END OF MIDDLE CONTAINERS-->
                <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
     </body>
</html>
