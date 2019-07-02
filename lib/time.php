<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link href="/modules/SQLSprinkler/css/style.css" rel="stylesheet" type="text/css"></link>
 <a href="../edit.php" class="w3-btn w3-hover-lime" style="float: left;">Config</a>

<a href="../" class="w3-btn w3-hover-pink" style="float: left:position:absolute;">Home</a>
<center>
<?php
$ontime = shell_exec('mysql -h localhost -u root -p#FiddleFire -s -N -e "SELECT \`On\` FROM SQLSprinkler.Timing"');

?>

	<div>
		<br>
	On time
</div>
		<br>
<form action="submit.php" method="get">
<select name="timeon" id="timeon">

<?php for($i = 0; $i < 24; $i++): ?>
<option value="<?php  echo $i<=9 ? '0'.$i.'00' : ''.$i.'00'; ?>"><?= $i % 12 ? $i % 12 : 12 ?>:00 <?= $i >= 12 ? 'pm' : 'am' ?></option>
<?php endfor ?>
</select>
	<br />
	<br>
	<input class="w3-btn w3-blue" type="submit" name="submit" value="Submit" />
</form>
</center>

<script>
var temp = "<?= substr(json_encode($ontime),1,-3); ?>";
var mySelect = document.getElementById('timeon');

for(var i, j = 0; i = mySelect.options[j]; j++) {
  if(i.value == temp) {
    mySelect.selectedIndex = j;
    break;
  }
}	
</script>


<script>
var temp1 = "<?= substr(json_encode($offtime),1,-3); ?>";
var mySelect1 = document.getElementById('timeoff');

for(var i1, j1 = 0; i1 = mySelect1.options[j1]; j1++) {
  if(i1.value == temp1) {
    mySelect1.selectedIndex = j1;
    break;
  }
}	
</script>
