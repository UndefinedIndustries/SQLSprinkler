<center>
<div style="width:95%;" class="w3-responsive" >
    <table class="w3-table w3-blue w3-bordered">
    <tr class="w3-indigo">
        <th>
            Station
        </th>
        <th>
            GPIO Number
        </th>
        <th>
            Time
        </th>
        <th>
            Actions
        </th>
    </tr>

<?php
    function checkSys($name1, $gpio1, $time1){
    ?>
    <tr>
    <td>
        <?php echo $name1; ?>
    </td>
    <td>
        <?php echo $gpio1; ?>
    </td>
    <td>
        <?php echo $time1; ?> Minutes
    </td>
    <td>
        <a href="lib/editsys.php?system=<?php echo $name1."&gpio=".$gpio1."&time=".$time1 ?>">Edit</a> | <a href="lib/edit-submit.php?remove=<?php echo $name1 ?>">Delete</a>
    </td>
</tr>

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
</table>
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
