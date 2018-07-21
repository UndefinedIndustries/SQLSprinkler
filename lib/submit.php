<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
                            header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
<?php
//What is this
	if(isset($_GET['on'])) {
			$run = $_GET['on'];
			exec("sudo python off.py");
			exec("sudo python on.py ".$run." &");
		}
	if(isset($_GET['off'])) {

			exec("sudo python off.py");
		}
	if(isset($_GET['timeon'])){
		$time=$_GET['timeon'];
		$test = shell_exec('mysql -h localhost -u root -proot -s -N -e "UPDATE SQLSprinkler.Timing SET \`On\`= \'"'.$time.'"\'"');
		echo $test;
	}
if(isset($_GET['sysoff'])) {
		exec('echo 0 > sys.dat');
	}
if(isset($_GET['syson'])) {
		exec('echo 1 > sys.dat');
	}
header('Location: ../');
 ?>
