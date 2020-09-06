<?php
error_reporting( 0 );
include( 'sql.php' );
$sqlquery = new doSQL();
$sqlquery->doSQLStuff( "SELECT * FROM `Systems`" );
$gpios = $sqlquery->get_gpios();
$id = $sqlquery->get_id();
$enabled->querySQL( "SELECT enabled from `Enabled`" );
if ( $enabled ) {
    while ( $row = mysqli_fetch_array( $enabled ) ) {
        var_dump($row);
//        array_push( $newnames, $row[ 'enabled' ] );
    }
}
$array = array();
for ( $i = 0; $i < sizeof( $id ); $i++ ) {
    $value = shell_exec( 'gpio -g read ' . $gpios[ $i ] );
    $array[ $i ]->gpio = $gpios[ $i ];
    $array[ $i ]->status = ( $value == 0 ? "on" : "off" );
}
$json = json_encode( $array );
echo $json;
?>
