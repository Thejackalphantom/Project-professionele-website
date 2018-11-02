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
            <?php include('includes/headerLOG.php');?>
            <div id="middelContainer">
                <div id="boxfotos">
                    <div class="fotosize2">
                        <div class="fotoSizeUp">
                            <h1>Uw foto's</h1>
                            <p><b>U heeft geupload:</b></p>
                            <?php
                                $target_dir = "uploads/";
                                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                                // Check if image file is a actual image or fake image
                                if(isset($_POST["submit"])) {
                                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                        if($check !== false) {
                                            $uploadOk = 1;
                                        } else {
                                            $uploadOk = 0;
                                        }
                                    }
                                // Check if file already exists
                                if (file_exists($target_file)) {
                                        $uploadOk = 0;
                                    }
                                // Allow certain file formats
                                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
                                        $uploadOk = 0;
                                    }
                                // Check if $uploadOk is set to 0 by an error
                                if ($uploadOk == 0) { // if everything is ok, try to upload file
                                    } else {
                                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                        } else {
                                        }
                                    }
                            ?>
                            <?php
                            $files = glob("uploads/*.*");
                            for ($i=0; $i<count($files); $i++)
                            {
                                $image = $files[$i];
                                $supported_file = array('gif', 'jpg', 'jpeg', 'png');
                                $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                                if (in_array($ext, $supported_file)) {
                                    echo '<img src="'. $image .'" alt="Random image"  width="200" height="100" />';
                                        } else {
                                            continue;
                                        }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div> <!-- END OF MIDDLE CONTAINERS-->
            <?php include('includes/footer.php');?>
        </div> <!-- END OF MAIN CONTAINERS-->
    </body>
</html>