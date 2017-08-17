<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
                             header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
<?php
$station_name = $_GET['remove'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "SQLSprinkler";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['remove'])){
// sql to delete a record
$sql = "DELETE FROM Systems WHERE Name='$station_name'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("Location: ../edit.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
}

?>

