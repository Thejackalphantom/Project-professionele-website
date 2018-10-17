<?php
//THIS FUNCTION CHECKS IF A LANGUAGE IS SELECTED AND IF IT HAS SELECTED ONE IT WILL IMPORT THE FILES LISTED IN THE PAREMETERS
    function setLanguage(){
        if(isset($_GET['lang'])){
            if($_GET['lang'] == "en"){
                require_once 'languages/en.php';
            }else{
                require_once 'languages/nl.php';
            }
        }else{
            require_once 'languages/nl.php';
        }
    }
setLanguage();