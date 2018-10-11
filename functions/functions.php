<?php

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