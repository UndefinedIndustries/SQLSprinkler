<br>
<br><?php
function checkGPIO($name1, $gpio1){
$value = shell_exec('gpio -g read '.$gpio1);
if ($value == 1){ $data = "Off"; }else{ $data = "On"; }
   			echo '<br/><p style="float:left;" class="label">'.$name1.' <br><span style="float: left; color: white;">Status: '.$data.'</span></p>';
   		if ($value == 0){
     		echo '<button style="float:right;" name="off" value='.$gpio1.' class="w3-btn w3-xlarge w3-green w3-round-large w3-hover-red w3-card-4" id="'.$gpio1.'" onclick="getData('.$gpio1.')">Turn Off </button><br><br>';
   		}else{
     		echo '<button name="on" style="float:right;" value='.$gpio1.' class="w3-btn w3-xlarge w3-blue w3-round-large w3-hover-purple w3-card-4" id="'.$gpio1.'" onclick="getData('.$gpio1.')">Turn On </button><br><br>';
   		}
}
?>
</br>
<?php
    $a = 0;
    $servername = "localhost"; //server ip for sql
    $username   = "root"; //server username
    $password   = "root"; //server password
    $dbname     = "SQLSprinkler"; //database name
    $conn       = mysqli_connect($servername, $username, $password, $dbname); //connect to sql database with all parameters
    $name= '';
    $sql    = "SELECT * FROM `Systems`"; // select only the username field from the table "users_table"
    $result = mysqli_query($conn, $sql); // process the query
    $username_array = array(); // start an array
    while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) // cycle through each record returned
      {
        $sysname[] = "\"" . $row['Name'] . "\""; // get the username field and add to the array above with surrounding quotes
        $sysgpio[]       = "\"" . $row['GPIO'] . "\""; // get the ip field and add to the array
        $name             = trim($sysname[$a], '"'); //trim " " from username
        $gpio               = trim($sysgpio[$a], '"'); //trim " " from ip
	$a++;
	checkGPIO($name, $gpio);
}
?>
<br>	</div>
		<?php
mysqli_close($conn);
 ?>

<script>
function getData(sys){
    var xhttp = new XMLHttpRequest();
    var test = document.getElementById(sys).name;
    var info=test+"="+sys;
    xhttp.open("GET", "lib/submit.php?"+info, true);
    console.log("sending");
    console.log(info);
    xhttp.send();

}
</script>
