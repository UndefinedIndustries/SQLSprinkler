<?php 
$station = $_GET['station'];
$gpio = $_GET['gpio'];
$time = $_GET['time'];

$servername = "192.168.1.181"; //server ip for sql
$username   = "root"; //server username
$password   = "#FiddleFire"; //server password
$dbname     = "SQLSprinkler"; //database name
$conn       = mysqli_connect($servername, $username, $password, $dbname); //connect to sql database with all parameters
$query = mysqli_query($conn, "SELECT * FROM Systems WHERE Name='$station' OR GPIO='$gpio'");
        if(mysqli_num_rows($query) > 0 ) { //check if there is already an entry for that username
          echo "Station already exists!";
          header("refresh:1;url=../edit.php");
        }else{
          mysqli_query($conn, "INSERT INTO Systems (Name, GPIO, Time) VALUES ('$station', '$gpio', '$time')");


          header("refresh:1;url=../edit.php");
        }
 ?>
 