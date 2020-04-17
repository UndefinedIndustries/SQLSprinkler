<?php
    $cookiename="loggedin";
          if(!isset($_COOKIE[$cookiename])) {
                  header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
            }
?>
<body>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="css/style.css?<?php time(); ?>" rel="stylesheet" type="text/css"></link>
 	<script src="js/1jquery.js"></script>
 	<script src="js/sprinkler.js"></script>
    <div style="position:fixed;top:0;left:0;">
        <a href="show_cal.php" class="w3-btn w3-hover-cyan w3-black" style="float: left;">System Calendar</a>
       <a href="lib/addsys.php" class="w3-btn w3-hover-lime w3-black" style="float: left;">Add System</a>
		<a href="lib/time.php" class="w3-btn w3-hover-lime w3-black" style="float: left;">On Time</a>
       <a href="./index.php" class="w3-btn w3-hover-pink w3-black" style="float: left">Home</a>
   </div>
	<center>
		<br/>

		<br/>

		</center>
		<br/>
		<br/>
		<div id="texts" style="text-align: center;padding:5px;font-size: 2em;">
			<?php
				include 'lib/edit-form.php';
 			?>
 		</div>

 	<br/>
 	<div id="texts1" style="margin-left: 25%;margin-right:25%;width:50%;text-align: right;padding:5px;border-radius:10px;font-size: 1.5em;color:#fff;">

  	</div>
</body>
