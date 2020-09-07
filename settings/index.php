<?php

include( '../lib/sql.php' );
$sqlquery = new doSQL();
$sqlquery->doSQLStuff("SELECT * FROM `Systems`");
$id = $sqlquery->get_id();
$names = $sqlquery->get_names();
$times = $sqlquery->get_times();
$gpios = $sqlquery->get_gpios();
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SQLSprinkler</title>
<link href="../css/w3.css" type="text/css" rel="stylesheet" />
<link href="../css/w3-flat.css" type="text/css" rel="stylesheet" />
<link href="../css/style.css" type="text/css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/e00a151875.js" crossorigin="anonymous"></script> 
<script src="../js/jquery.js"></script> 
<script src="../js/sprinkler.js"></script>
<script src="../js/settings.js"></script>
</head>
<body>
	<div class="w3-display-topmiddle w3-threequarter w3-padding-small">
		<table class="w3-table-all w3-centered" style="width:100%">
		<tr>
			<th>Zone</th>
			<th>Run Time</th>
			<th>Actions</th>
		</tr>
		<?php
			for ( $i = 0; $i < sizeof( $id ); $i++ ) {
		?>
		<tr>
			<td><?php echo $i+1;?></td>
			<td><?php echo $times[$i];?></td>
			<td><a href="?edit=<?php echo $gpios[$i];?>" class="w3-button w3-gray">Edit</a>&nbsp;<a href="?delete=<?php echo $gpios[$i]; ?>" class="w3-button w3-red">Delete</a></td>
		<?php
			}
		?>
		</table>
	</div>
	<div class="w3-display-bottomleft w3-center w3-flat-silver w3-dropdown-hover " style="position:fixed;">
		<a href="javascript:void(0);" id="menuopen" class="w3-button fix-bars"> <i style="z-index: 5;" class="fa fa-bars w3-display-middle"></i></a>
		<div style="display: none;" id="menunav" >
			<a id="menuclose" class="w3-button"><i style="z-index: 5;" class="fa fa-times"></i></a> 
			<a href="../" class="w3-button" ><i style="z-index: 5;" class="fa fa-home"></i></a> 
    	</div>
	</div>
</body>
</html>
