<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
<link href="https://gt3ch1.tk/css/normalize.css" rel="stylesheet" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://gt3ch1.tk/css/style0.css" rel="stylesheet" type="text/css"></link>
<script src="https://gt3ch1.tk/js/1jquery.js"></script>
<script src="https://gt3ch1.tk/js/sprinkler.js"></script>
<?php 
    include_once('lib/calendar.php');
 ?>