<?php 
                $cookiename="loggedin";
                      if(!isset($_COOKIE[$cookiename])) {
                             header("Location: /login.php?url=".$_SERVER['REQUEST_URI']);
                        } else {
            
                        }
 ?> 
<?php
function check_aday($dayx){
  for ($t=1; $t <=7 ; $t++) {
      exec('touch ./data/aday'.$t.'.dat');
    exec('cat ./data/aday'.$t.'.dat', $status);
      }
      if ($status[$dayx] == 1){
        echo 'checked ';
      }
    }
    function check_bday($dayx){
      for ($t=1; $t <=7 ; $t++) {
           exec('touch ./data/bday'.$t.'.dat');
        exec('cat ./data/bday'.$t.'.dat', $status);
          }
          if ($status[$dayx] == 1){
            echo 'checked ';
          }
        }



function calendar(){
   $i = 0;
   $name = "test";


  for( $i = 1; $i<=7; $i++ ) {
    if($i == 1){
      $name = "Monday";
    }
    if($i == 2){
      $name = "Tuesday";
    }
    if($i == 3){
      $name = "Wednesday";
    }
    if($i == 4){
      $name = "Thursday";
    }
    if($i == 5){
      $name = "Friday";
    }
    if($i == 6){
      $name = "Saturday";
    }
    if($i == 7){
      $name = "Sunday";
    }



  ?>


    <tr>

        <th>
            <?php echo $name;?>
        </th>

        <th>
            <input style="background-color:cyan;" id="a"  type="checkbox" <?php check_aday($i-1); ?>name="aday<?php echo $i;?>" value="<?php echo $i;?>"></input>
            
        </th>
        <th>
            <input style="background-color:cyan;" id="a"  type="checkbox" <?php check_bday($i-1); ?>name="bday<?php echo $i;?>" value="<?php echo $i;?>"></input>
        </th>
    </tr>


    
        
     <!-- <span style="float:right;">
          <br?
      <label><input style="float:right;background-color:cyan;" id="a"  type="checkbox" <?php check_aday($i-1); ?>name="day<?php echo $i;?>" value="<?php echo $i;?>"></input>A</label>
  </span>
    <span style="float:right;">
      <label><input style="float:right;background-color:cyan;" id="b"  type="checkbox" <?php check_bday($i-1); ?>name="day<?php echo $i;?>" value="<?php echo $i;?>"></input>B</label></span><br/><br/></td></tr>
-->
  <?php
  }

}

#echo_system();
#read_gpio();
#calendar();
?>
</table>