<?php
exec ("cat data/sys1.dat", $data1);
exec ("cat data/sys2.dat", $data1);
exec ("cat data/sys3.dat", $data1);
exec ("cat data/sys4.dat", $data1);
exec ("cat data/sys5.dat", $data1);
exec ("cat data/sys6.dat", $data1);
exec ("cat data/sys7.dat", $data1);
exec ("cat data/sys8.dat", $data1);
exec ("cat data/sys9.dat", $data1);
exec ("cat data/sys10.dat", $data1);
$a = '';
/*

if (isset($_POST['sub1']))
{
$time = $_POST["name1"];
exec("echo ".$time." > test.dat");
}
*/
foreach ($data1 as $value){
$test = $value / 60;
echo "System ".++$a."&nbsp";
echo "<select id='time' name=".$a.">";

if ($value == "0"){
echo "<option selected value='0'>Off</option>";
}else {
  echo "<option selected value='$value'>".$test." Minutes</option>";
}
echo "<option disabled></option>";
if($value =="300"){
  echo "<option value='0'>Off</option>";
  echo "<option value='600'>10 Minutes</option>";
  echo "<option value='900'>15 Minutes</option>";
  echo "<option value='1200'>20 Minutes</option>";
}elseif ($value =="600") {
  echo "<option value='0'>Off</option>";
  echo "<option value='300'>5 Minutes</option>";
  echo "<option value='900'>15 Minutes</option>";
  echo "<option value='1200'>20 Minutes</option>";
}elseif($value =="900"){
  echo "<option value='0'>Off</option>";
  echo "<option value='300'>5 Minutes</option>";
  echo "<option value='600'>10 Minutes</option>";
  echo "<option value='1200'>20 Minutes</option>";
}elseif($value =="1200"){
  echo "<option value='0'>Off</option>";
  echo "<option value='300'>5 Minutes</option>";
  echo "<option value='600'>10 Minutes</option>";
  echo "<option value='900'>15 Minutes</option>";
}elseif ($value =="0") {
  echo "<option value='300'>5 Minutes</option>";
  echo "<option value='600'>10 Minutes</option>";
  echo "<option value='900'>15 Minutes</option>";
  echo "<option value='1200'>20 Minutes</option>";
}


echo "</select>";
echo "</br>";
echo "</br>";
}
 ?>
 <!--
 <input type="submit" name="sub1" value="Submit Data">
