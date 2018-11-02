<div id="header">
    <div id="navMenu">
        <a href='inlog.php'> 
            <div class="navInlog">
                <p class="biggerText"><?php echo $lang['login']; ?></p>
            </div> 
        </a>
        <div id="navSpace">
        </div>
        <div class="navLang">
            <?php 
                if(isset($_GET['lang'])){
                    if($_GET['lang'] == "nl"){
                        echo "<a href='?lang=en'>English</a>";
                    }else{
                        echo "<a href='?lang=nl'>Nederlands</a>";
                    }
                }else{
                    echo "<a href='?lang=en'>English</a>";
                }
            ?>
        </div>
        <div class="dropdown" id="hamburger">
            <div class="dropdown">
                <div id="hamburgerBox">
                    <img src="img/hamburger.jpg" alt="hamburger_menu">
                </div>
                    <p id="TextChange"> MENU </p>
                <div class="dropdown-content">
                    <a href="nieuws.php"> <p><?php echo $lang['news'];?></p> </a>
                    <a href="Fotoalbum.php"> <p><?php echo $lang['photoalbum'];?></p> </a>
                    <a href="specialNeeds.php"> <p><?php echo $lang['special_education'];?></p> </a>
                </div>
            </div>
        </div>
    </div> <!-- END OF HEADER -->
</div>
