<?php
  /* TASK 01 */
  $friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];

  echo "<pre>";
  print_r (array_chunk(array_change_key_case ($friends , CASE_LOWER), 2 , true));
  echo "</pre>";
  echo "------------------------------<br>";






  /* TASK 02 */
  $codes = ["H", "C", "J"];
  $means = ["HTML", "CSS", "JavaScript"];

  echo "<pre>";
  print_r(array_change_key_case((array_combine($codes,$means)), CASE_LOWER));
  echo "</pre>";
  echo "------------------------------<br>";



  /* TASK 03 */
  $friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];
  echo "<pre>";
  print_r (array_reverse(array_change_key_case(array_flip($friends) , CASE_LOWER)));
  echo "</pre>";
  echo "------------------------------<br>";


  
   /* TASK 04 */
  $nums = [10, 20, 30];
  echo array_reduce($nums , fn ($n1 , $n2) => $n1 + $n2);
  echo "<br>";
  echo array_sum ($nums)."<br>";
  echo "------------------------------<br>";



  /* TASK 05 */
  $Number = [5, 10, 20, 5, 30, 40];
  function sum (... $num){
    $result = 0;
    foreach ($num as $Num){
        if ($Num != 5){
             $result += $Num ;
        }else {
            continue;
        }
    }
    return $result;
  }
  echo array_reduce ($Number , "sum")."<br>";
  echo "------------------------------<br>";





/* TASK 07 */
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next ($names);
next ($names);
echo current($names) . "<br>"; // "Sayed"

end($names);
echo current($names) . "<br>"; // "Ali"

reset($names);
echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);
echo current($names) . "<br>"; // "Mahmoud"

echo "------------------------------<br>";





/* TASK 08 */
$chars = ["A", "B", "C"];
//$chars [] = "D";
  
  array_push($chars , "D");
  echo "<pre>";
  print_r ($chars);
  echo "</pre>";
  echo "------------------------------<br>";





/* TASK 09 */
$nums = [1, 2, 3, 4, 5, 6];
  echo "<pre>";
  print_r(array_slice($nums , -5 , -2));
  echo "</pre>";
  echo "------------------------------<br>";





  /* TASK 10 
  $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
  $nums = [4, 5, 6];

  foreach ($mix as $Mix){
   if (gettype (current) == gettype ("")){
     continue;
   }
   else {
    return $Mix;
   }
   }


  echo "<pre>";
  print_r($mix);
  echo "</pre>";
  echo "------------------------------<br>";

*/



  
/*  TASK 11 */
$arr = ["A", "B", "C", "D", "E"];

$count = 0;
foreach ($arr as $element):
    $count++ ;
endforeach;

echo "Number of element = ".$count ."<br>";
echo "------------------------------<br>";





/* TASK 12 */
$nums = [11, 2, 10, 7, 20, 50];
function addition (...$nums){
    $result = 0;
    foreach ($nums as $number) :
    $result += $number;
    endforeach;
return $result; 
}
echo addition (11, 2, 10, 7, 20, 50);
echo "<br>";
echo "------------------------------<br>";






/* TASK 13 
$nums = [10, 100, -20, 50, 30];
function Max_num ($n1 , $n2){
    if ($n1 > $n2){
        return $n1;
    }else{
        return $n2;
    }
}
$MAX = array_map ( "Max_num" , $nums);
echo "Max number = $MAX <br>";
*/
/*  $i = 0;
function find_max (...$nums){
   
    foreach ($nums as $num){
        if ($num[i] > $num[i+1]){
            return $num [i];
        }
        else {
            return $num [i+1];
        }
        $i++;
    }
    return $um;
}
echo "Max = $num <br>";
*/










/* TASK 14 
$nums = [10, 100, -20, 50, 30];
function Min_Num ($n1 , $n2){
    if ($n1 < $n2){
        return $n1;
    }
    else {
        return $n2;
    }
}
echo "The min number is ".Min_Num(10 , 100 , -20 , 50 , 30)."<br>";
echo "------------------------------<br>";
*/



/* TASK 15 
$chars = ["o", "r", "e", "z", "l", "E"];

output:  Elzero

*/

/* TASK 16 */
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
array_splice ($mix , 0 , 3);
sort ($mix);
function mode (...$num){
    foreach ($num as $Num) {
        if ($Num %2 != 0){
            return $Num;
        }else{
            continue;
        }
    }
}

echo "<pre>";
print_r (array_map ("mode" , $mix));
echo "</pre>";
echo "------------------------------<br>";




/* TASK 18 */
$title = "E&z\$r0 W\$b Sch00&";
echo str_replace (["&", "\$" ,"0" ] , ["l", "e" , "o"], $title , $count)."<br>";
echo $count;

