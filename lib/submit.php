<?php
if ( isset( $_GET[ 'on' ] ) ) {
    $run = $_GET[ 'on' ];
    exec( "sudo python off.py" );
    exec( "sudo python on.py " . $run . " &" );
    echo $run;
}
if ( isset( $_GET[ 'off' ] ) ) {

    exec( "sudo python off.py" );
}
?>