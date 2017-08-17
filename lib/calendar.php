<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
                            header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
<?php
	include 'scan.php';
 ?>
<center>
<html>
	<head>
    	<meta charset="utf-8">
    	<title></title>
  	</head>
    <div style="position:fixed;top:0;left:0;">
       <a href="edit.php" class="w3-btn w3-hover-lime w3-black w3-card" style="float: left;">Config</a>
       <a href="./" class="w3-btn w3-hover-pink w3-black w3-card" style="float: left">Home</a>
    </div>
	<body>
        <div style="width:750px;color: white;padding-left: 32px;padding-right: 32px;margin: 12%" class="w3-indigo w3-padding-32 w3-round-large w3-card-4">
 		<center>
			<span style="color: #fff;font-size: 2em;">
				Schedule
			</span>
		</center>
        <form action="lib/calendar-submit.php" method="get">
                    <table class="w3-table w3-blue w3-bordered">
                    <tr class="w3-indigo">
                        <th>
                            Day
                        </th>
                        <th>
                            A
                        </th>
                        <th>
                             B
                        </th>
                    </tr>
        
          <?php calendar(); ?>
          </table>
          <center>
              <input type="submit" value="Submit" class="w3-blue w3-btn w3-hover-red w3-round-large"/>
              <a href="./" style="text-decoration: none;color :#000;">
  				<button type="button" class="w3-btn  w3-blue w3-round-large w3-hover-blue-grey">
  					Cancel
  				</button>
  			</a>
          </center>
        </form>
    </div>
  </body>
</html>
