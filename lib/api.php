<?php
include( 'sql.php' );
$sqlquery = new doSQL();
$sqlquery->doSQLStuff( "SELECT * FROM `Systems`" );
$gpios = $sqlquery->get_gpios();
$id = $sqlquery->get_id();
$array =array(array());
for ( $i = 0; $i < sizeof( id ); $i++ ) {
    $value = shell_exec('gpio -g read '.$gpios[$i]);
    $array[$i]->gpio = $gpios[$i];
    $array[$i]->status = $value;
}
$json = json_encode($array);
echo $json;
?>