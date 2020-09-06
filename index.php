<?php
include( 'lib/sql.php' );
$sqlquery = new doSQL();
$sqlquery->doSQLStuff( "SELECT * FROM `Systems`" );
$names = $sqlquery->get_names();
$gpios = $sqlquery->get_gpios();
$id = $sqlquery->get_id();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SQLSprinkler</title>
<link href="css/w3.css" type="text/css" rel="stylesheet" />
<link href="css/w3-flat.css" type="text/css" rel="stylesheet" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/e00a151875.js" crossorigin="anonymous"></script> 
<script src="js/jquery.js"></script> 
<script src="js/sprinkler.js"></script>
</head>
<body>
<div>
    <div class="w3-display-topmiddle w3-threequarter w3-padding-small striped">
        <div class="w3-rest">
            <div style="float:left;">
                <p>System Schedule<br>
                    Status: On</p>
            </div>
            <div style="float:right;margin-top:8px">
                <button class="w3-button programoff w3-round-xxlarge" >&nbsp;&nbsp;Turn Off&nbsp;&nbsp;</button>
            </div>
        </div>
        <hr>
        <br>
        <br>
        <!--        Begin systems, repeat this <?php echo sizeof($id); ?> times --> 
        <!--        TODO: make an API system to get the status of each gpio. Cron?-->
        <?php
        for ( $i = 0; $i < sizeof( $id ); $i++ ) {
            ?>
        <div class="w3-rest">
            <div style="float:left;" >
                <p>
                    <?php echo 'Zone '.($i+1).' - '.$names[$i]; ?>
                    <br>
                    Status: Off</p>
            </div>
            <div style="float:right;margin-top:8px">
                <button id="<?php echo $gpios[$i]; ?>" name="toggle" onclick="getData(<?php echo $gpios[$i]; ?>)" class="w3-button systemoff w3-round-xxlarge" >&nbsp;&nbsp;Turn On&nbsp;&nbsp;</button>
            </div>
        </div>
        <hr>
        <br>
        <?php
        }
        ?>
        
        <!--        End systems-->
    </div>
    <div class="w3-display-bottomleft w3-center w3-flat-asbestos w3-dropdown-hover " style="position:fixed;">
        <a href="javascript:void(0);" id="menuopen" class="w3-button fix-bars"> <i style="z-index: 5;" class="fa fa-bars w3-display-middle"></i> </a>
        <div style="display: none;" id="menunav" >
            <a id="menuclose" class="w3-button "> <i style="z-index: 5;" class="fa fa-times"></i></a> <a href="#" class="w3-button"><i style="z-index: 5;" class="fa fa-home"></i></a> <a href="#" class="w3-button"><i style="z-index: 5;" class="fa fa-gears"></i></a>
        </div>
    </div>
</div>
</body>
</html>
