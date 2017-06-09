<?php 
$station = $_GET['station'];
$gpio = $_GET['gpio'];
$time = $_GET['time'];
$oldname = $_GET['old_name'];
$days = $_GET['a'] + $_GET['b'];
echo $station;
echo $oldname;
$servername = "localhost"; //server ip for sql
$username   = "root"; //server username
$password   = "root"; //server password
$dbname     = "SQLSprinkler"; //database name
$conn       = mysqli_connect($servername, $username, $password, $dbname); //connect to sql database with all parameters
$sql = "UPDATE Systems SET Name='$station', GPIO='$gpio', Time='$time', Days='$days' WHERE `Systems`.`Name`='$oldname'";
          mysqli_query($conn, $sql);
          header("Location: ../edit.php");
        
 ?>
 
