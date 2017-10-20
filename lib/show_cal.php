<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
                    header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="js/1jquery.js"></script>
<script src="js/sprinkler.js"></script>


    <center>

    <?php 
        include_once('lib/calendar.php');
     ?>
</center>
