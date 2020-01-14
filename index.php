<?php
echo "<hr/>";
echo "Minimum Value in array in php";
echo "<hr/>";  

$arr = array(10,2,4,6,9,0,1,-1,4,8);

$min = $arr[0];

for($i=0; $i<count($arr); $i++) {

     if($min > $arr[$i]) {

         $min = $arr[$i];
     }

}

print_r($min);

echo "<hr/>";
echo "Minimum Value in array in php Using for loop";
echo "<hr/>"; 

$array = array(12,9,0,-32,87,89,3,7);
$Minimum =  $array[0];
foreach ($array as $key => $value) {
  if($Minimum > $value) {
    $Minimum = $value;
  }
}

print_r($Minimum);

echo "<hr/>";
echo "maximum  Value in array in php";
echo "<hr/>";  

$arrs =array(1,34,7,0,100,3,67,8,19,7);
$max1 = $arrs[0];

for($i=0; $i< count($arrs); $i++) {

  if($max1 < $arrs[$i]) {
    $max1=$arrs[$i];
  }
}
print_r($max1);


echo "<hr/>";
echo "Maximum  Value in array in php Using foreach loop";
echo "<hr/>";  

$array1 = array(2,8,10,20,56,9,46,110,23,7,4,98,10);

$maximum = $array1[0];

foreach ($array1 as $key => $values) {
  
  if($maximum < $values) {

    $maximum = $values;
  }

}
print_r($maximum);

echo "<hr/>";
echo "<h2>Sorting array In Assending  Order  order in php array(12,3,45,6,2,4,23,4,5,56,33,1,23,4) </h2>";
echo "<hr/>";  

$descsort = array(12,3,45,6,2,4,23,4,5,56,33,1,23,4);

$desctemp = 0;

 for($i=0; $i<count($descsort); $i++) {

      for($j=0; $j<count($descsort)-1; $j++) {

        if($descsort[$i] < $descsort[$j]) {
          
          $desctemp = $descsort[$i];
          $descsort[$i] = $descsort[$j];

          $descsort[$j] = $desctemp;
        }
      }

 }

echo "<pre> Assending Order Sorted Array is :"; print_r($descsort);



echo "<hr/>";
echo "<h2>Sorting array In Desending  order in php array(12,14,16,7,2,0,4,5,90,12,3,4,5,6) </h2>";
echo "<hr/>";  

$SortingArr = array(12,14,16,7,2,0,4,5,90,12,3,4,5,6);

$temp = 0;

for($i=0; $i<count($SortingArr); $i++) {

       for($j =0; $j<count($SortingArr) -1; $j++) {

          if($SortingArr[$i] > $SortingArr[$j]) {

            $temp = $SortingArr[$i];
            $SortingArr[$i] = $SortingArr[$j];
            $SortingArr[$j] = $temp;
          }
       }
}

echo "<pre> Desending Order Sorted Array is :"; print_r($SortingArr);

echo "<hr/>";
echo "<h2>Duplicate value in array  in php array(12,14,16,7,2,0,4,5,90,12,3,4,5,6) </h2>";
echo "<hr/>";  

$dupArray = array(2,3,34,12,10,5,6,2,4,5,10);
$arrCount=array();
for($i=0; $i<count($dupArray); $i++) {

  $key=$dupArray[$i];

  if(@$arrCount[$key]>=1){
    
    $arrCount[$key]++;
  } else{
    $arrCount[$key]=1;
  }

}

print_r($dupArray);

echo "<hr/>";
echo "<h2>Remove Duplicate value in array  in php array(2,3,34,12,10,5,6,2,4,5,10) </h2>";
echo "<hr/>"; 

 $RemoveDupAray=array(2,3,34,12,10,5,6,2,4,5,10);

 $Duplicate =array();
for($i=0; $i<count($RemoveDupAray); $i++) {
 $dup = 0;
  for($j=0; $j<count($Duplicate); $j++){

    if($RemoveDupAray[$i] == $Duplicate[$j]) {
       $dup = 1;
    }
      
  }

  if (!$dup) 
       $Duplicate[] = $RemoveDupAray[$i];   
}
print_r($Duplicate);
