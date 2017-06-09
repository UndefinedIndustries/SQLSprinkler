<?php
    for ($i=1; $i <= 7; $i++) {
    	if(isset($_GET["aday$i"])){
        	exec('echo 1 > ../data/aday'.$i.'.dat');
        }else{
            exec('echo 0 > ../data/aday'.$i.'.dat');
    	}
        if(isset($_GET["bday$i"])){
        	exec('echo 1 > ../data/bday'.$i.'.dat');
        }else{
            exec('echo 0 > ../data/bday'.$i.'.dat');
    	}
	}
header('Location: ../edit.php');
?>
