<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
                            header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?>
<!DOCTYPE html>
 <html>
   <head>
     	<meta charset="utf-8">
    	<link href="css/style.css" rel="stylesheet" type="text/css"></link>
     	<script src="js/1jquery.js"></script>
     	<script src="js/sprinkler.js"></script>

    	<link rel="stylesheet" href="css//w3.css">    
     	<title>sPrInkler Controller</title>
   </head>
   <body>
     <div style="position:fixed;top:0;left:0;">
        <a href="edit.php" class="w3-btn w3-hover-lime w3-card" style="float: left;">Config</a>
        <a href="../.." class="w3-btn w3-hover-pink w3-card" style="float: left">Home</a>
	</div>
    <center>
    	<div style="max-width: 600px;margin-top: 50px; !important;float: none !important;text-align:center;">
     		<form id ="test" action="lib/submit.php" method="get">
        
				<div style="max-width:1200px;">

<table class="w3-table w3-bordered">       			<?php
				echo '<tr>';
				$weather_check=file_get_contents('lib/weather_count.dat');
       				$test1=file_get_contents('lib/sys.dat'); //get the contents of the file lib/sys.dat
				if($weather_check >= 6){
       				if($test1 == 1){  // if the variable test1 is equal to one
       					echo '<td><p style="float:left" >System Schedule <br> Status: On</p></td>'; //echo that the system is on
       					echo '<td><button name="sysoff" id="sysoff" style="float:right" class="w3-btn w3-red w3-xlarge w3-hover-indigo w3-round-large w3-card-4"> Turn Off </button></td>'; //make a buton that says turn off
   					}else{ //else
				       echo '<td><p style="float:left">System Schedule <br> Status: Off</p></td>'; //echo that the system is off
				       echo '<td><button name="syson" id="syson" style="float:right" class="w3-btn w3-black w3-xlarge w3-round-large w3-hover-indigo w3-card-4"> Turn On </button></td>'; //make a button that says turn on
				}
				?>
				<br/> <br/>
				<span id="alert" style="padding: 16px;"class="w3-gray w3-card-4">The weather check has indicated that the system does not need to run today.</span>

				<?php
				}else{
				       				if($test1 == 1){  // if the variable test1 is equal to one
       					echo '<td><p style="float:left" >System Schedule <br> Status: On</p></td>'; //echo that the system is on
       					echo '<td><button name="sysoff" id="sysoff" style="float:right" class="w3-btn w3-teal w3-xlarge w3-hover-indigo w3-round-large w3-card-4"> Turn Off </button></td>'; //make a buton that says turn off
   					}else{ //else
				       echo '<td><p style="float:left">System Schedule <br> Status: Off</p></td>'; //echo that the system is off
				       echo '<td><button name="syson" id="syson" style="float:right" class="w3-btn w3-blue w3-xlarge w3-round-large w3-hover-indigo w3-card-4"> Turn On </button></td>'; //make a button that says turn on
       				}
				}
				echo '</tr></table>';
        		?>
			</div>
     		</form>
     		<form  id="foo" action="lib/submit.php" method="get" onsubmit="return false;">
       			<div id="data"/>
            		<?php
						include 'lib/check.php';
					 ?>
          		</div>
     		</form>
		</center>
		<div style="bottom: 0;position:fixed;float:left;left:0;">
    		<?php
				include_once('lib/version.php');  //include the php version file
				?>
  		</div>
   </body>
</html>
