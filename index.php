<!DOCTYPE html>
<!--
Index Project Professionele Website
-->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="index.css">
        <meta charset="UTF-8">
        <title>placeholder</title>
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                  content.style.maxHeight = null;
                } else {
                  content.style.maxHeight = content.scrollHeight + "px";
                } 
              });
            }
        </script>
    </head>
    <body>
        <div id="mainContainer">
            <div id="sideBarLeft">
               
            </div>
            <div id="header">
                
            </div>
            <div id="middleContainer">
            </div>
            <div id="sideBarRight">
            </div>
        </div>
    </body>
</html>
