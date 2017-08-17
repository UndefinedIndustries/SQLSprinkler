<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
                        header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
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
            Run Days
        </th>
        <th>
            Actions
        </th>

    </tr>

<?php
    function checkSys($name1, $gpio1, $time1, $days, $time2){
    ?>
    <tr>
    <td>
        <?php echo $name1; ?>
    </td>
    <td>
        <?php echo $gpio1; ?>
    </td>

    <td>
        <?php echo $time1; ?> 
    </td>
        <td>
            <?php     
            if($days==1){
                    $actualdays="A";
                }
                if($days==2){
                    $actualdays="B";
                }
                if($days==3){
                    $actualdays="A & B";
                }
                if($days==0){
                    $actualdays="OFF";
                }
                echo $actualdays; ?>
        </td>
    <td>
        <a href="lib/editsys.php?system=<?php echo $name1."&gpio=".$gpio1."&time=".$time2."&days=".$days."" ?>">Edit</a> | <a href="lib/edit-submit.php?remove=<?php echo $name1 ?>">Delete</a>
    </td>
</tr>

    <?php
}
    $a = 0;
    $servername = "127.0.0.1"; //server ip for sql
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
        $time[]   = "\"" . $row['Time'] . "\""; // get the ip field and add to the array
        $sysdays[]   = "\"" . $row['Days'] . "\""; // get the ip field and add to the array        
        $name             = trim($sysname[$a], '"'); //trim " " from username
        $gpio               = trim($sysgpio[$a], '"'); //trim " " from ip
        $timea               = trim($time[$a], '"'); //trim " " from ip
        $days = trim($sysdays[$a], '"');
	$a++;
    if($timea==0){
        $timeb="OFF";
    }else{
        $timeb=$timea." minutes";
    }
	checkSys($name, $gpio, $timeb, $days, $timea);
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
