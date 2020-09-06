<?php
/* Begin block for API calls */
include( 'sql.php' );
$sqlquery = new doSQL();
$enabled = $sqlquery->querySQL( "SELECT enabled from `Enabled`" );
$sqlquery->doSQLStuff( "SELECT * FROM `Systems`" );
$gpios = $sqlquery->get_gpios();
$id = $sqlquery->get_id();
$array = array();
for ( $i = 0; $i < sizeof( $id ); $i++ ) {
    $value = shell_exec( 'gpio -g read ' . $gpios[ $i ] );
    $array[ $i ]->gpio = $gpios[ $i ];
    $array[ $i ]->status = ( $value == 0 ? "on" : "off" );
}
$json = json_encode( $array );
if(isset($_GET['systems'])){
	echo $json;
}
if(isset($_GET['systemstatus'])){
	$isEnabled = '';
	if ( $enabled ) {
    	while ( $row = mysqli_fetch_array( $enabled ) ) {
			$isEnabled = $row[0];
		}
		$newJson->systemstatus=$isEnabled;
		echo json_encode ( $newJson );
	}
}
/* Begin block for submit files */
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
