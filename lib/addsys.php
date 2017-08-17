<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
                    header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
	<link href="https://gt3ch1.tk/css/normalize.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://gt3ch1.tk/css/style0.css" rel="stylesheet" type="text/css"></link>
    <div style="position:fixed;top:0;left:0;">
       <a href="../edit.php" class="w3-btn w3-hover-lime w3-black" style="float: left;">Config</a>
       <a href="../" class="w3-btn w3-hover-pink w3-black" style="float: left">Home</a>
   </div>
    	<div id="texts" style="text-align: center;padding:5px;font-size: 2em;color:white;">
            <center>
<form action="addsys-submit.php" method="get">
    <div style="width: 400px;font-size: 1em;padding:32px;margin-top: 20%;"  class="w3-indigo">
        <br>
        <span style="float:left;">Name:</span> <input name="station" type="text" style="font-size: .5em;float:right;margin-top: 10px;color: black;"></input>
        <br>
        <span style="float:left;">GPIO Pin:</span> <input name="gpio" type="number" min="1" max="40" style="font-size: .5em;float:right;margin-top: 10px;color: black;"></input>
        <br>
        <span style="float:left;">Time(Minutes)</span> <input name="time" type="number" min="1" max="120" style="font-size: .5em;float:right;margin-top: 10px;color: black;"></input>
        <br>
        <input type="submit" value="Submit" style="color:black;" class="w3-btn w3-blue"></input>
    </div>
    
</form>