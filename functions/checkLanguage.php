<?php
function checkLanguage(){
    $language = $_GET['lang'];
        if($language == en){
            require_once "languages/en.php";
        }else if($language == nl){
            echo "languages/nl.php";
        }else{
            echo "languages/nl.php";
        }
    }
checkLanguage();