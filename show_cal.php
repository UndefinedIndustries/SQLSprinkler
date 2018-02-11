<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
<link rel="stylesheet" href="css/w3.css">
<link href="css/style.css" rel="stylesheet" type="text/css"></link>
<script src="js/1jquery.js"></script>
<script src="js/sprinkler.js"></script>
<?php 
    include_once('lib/calendar.php');
 ?>