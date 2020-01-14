<?php 

function right_angle_trangle($n) {
  for($i=0; $i<$n; $i++) {

      for($j=0; $j<=$i; $j++) {

        echo "*";
      }
      echo "<br>";
  }
}
echo "right angle Trangle";
echo "<hr/>";
echo "<br>";
$input = 5;
right_angle_trangle($input);

echo "<hr/>";
echo "Oppostite right angle Trangle";
echo "<hr/>";
function opposite_right_angle_trangle($n) {

   for($i=0; $i<$n; $i++) {

      for($j=$n; $j>$i; $j--) {

        echo "*";
      }
      echo "<br/>";
   }
}

$input_no = 5;
opposite_right_angle_trangle($input_no);

echo "<hr/>";
echo " Trangle";
echo "<hr/>";


function trangle($n) {

  for($i=0; $i<$n; $i++) {

      for($j=$n; $j>$i; $j--) {

        echo "&nbsp";
      }
      for($k=0; $k<=$i; $k++) {

        echo "*";
      }
      echo "<br/>";
  }
} 
$input_no = 5;
trangle($input_no);

echo "<hr/>";
echo "Left Right angle trangle";
echo "<hr/>";



function left_right_trangle($n) {

for ($i = 5; $i >= 1; $i--) {


      for ($j = 1; $j < $i; $j++)
       { 
        echo "&nbsp;&nbsp;";

       } 
      for ($k = 5; $k >= $i; $k--) {
         echo "*";
      }
        echo "</br>";
    }
}

$input_no = 5;

left_right_trangle($input_no);

echo "<hr/>";
echo "Quardlateral";
echo "<hr/>";

function rectangle($n) {

  for($i=0; $i<5; $i++) {

    for($j=0; $j< $n; $j++) {

      echo "*";
    }

    echo "<br/>";
  }
}

$input_no = 5;

rectangle($input_no);




?>