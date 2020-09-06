<?php
$dir=getcwd()."/";
if ( isset( $_GET[ 'on' ] ) ) {
    $run = $_GET[ 'on' ];
    exec( "sudo ".$dir."off.py" );
    exec( "sudo ".$dir."on.py " . $run);
    echo "Running... " . $run . " -> " .$dir;
}
if ( isset( $_GET[ 'off' ] ) ) {
    exec( "sudo ".$dir."off.py" );
	echo "Turning off. ".$_GET['off']." ->".$dir;
}
?>
