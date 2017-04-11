<center>
<div style="width:75%;" >
    <div class="w3-quarter w3-indigo" style="color: white;">
    Station
</div>
<div class="w3-quarter w3-indigo">
    GPIO Number
</div>
<div class="w3-quarter w3-indigo">
    Time
</div>
<div class="w3-quarter w3-indigo">
    Actions
</div>
<?php
    function checkSys($name1, $gpio1, $time1){
    ?>
    <div class="w3-quarter  w3-cyan">
        <?php echo $name1; ?>
    </div>
    <div class="w3-quarter  w3-cyan">
        <?php echo $gpio1; ?>
    </div>
    <div class="w3-quarter  w3-cyan">
        <?php echo $time1; ?> Minutes
    </div>
    <div class="w3-quarter w3-purple">
        <a href="lib/editsys.php?system=<?php echo $name1."&gpio=".$gpio1."&time=".$time1 ?>">Edit</a> | <a href="lib/edit-submit.php?remove=<?php echo $name1 ?>">Delete</a>
    </div>
    <hr/>
    <?php
}
    $a = 0;
    $servername = "192.168.1.181"; //server ip for sql
    $username   = "root"; //server username
    $password   = "#FiddleFire"; //server password
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
        $time[]   = "\"" . $row['Time'] . "\""; // get the ip field and add to the array
        $name             = trim($sysname[$a], '"'); //trim " " from username
        $gpio               = trim($sysgpio[$a], '"'); //trim " " from ip
        $timea               = trim($time[$a], '"'); //trim " " from ip
	$a++;
	checkSys($name, $gpio, $timea);
}
?>
</div>
<br>
<br/><br/>
<!--Add System
!-->
<style>
	div#c{
		margin-left: 10px;
	}
    div{color:white;}
	#test{
		float: left;
		margin-right: 10px;
		color :#fff;
		font-size: .75em;
	}
	select#time{
        color: #fff;
  		border: 0px solid;
  		font-size: .75em;
        float:right;
	}
</style>
<br/>
