<?php
/* 01 */
function Say_Hello($name , $gender=""){
    if ($gender == "female"){
        echo "Hello Miss ".$name;
    }elseif ($gender == "male"){
        echo "Hello Mr ".$name;
    }else {
        echo "Hello ".$name;
    }
}

Say_Hello ("Osama","male");
echo '<br>';
Say_Hello ("Rama" , "female");
echo '<br>';
Say_Hello ("Samer");
echo '<br>';
echo '<br>';
echo '<br>';




/* 02 */
function get_argument(...$All){
    foreach ($All as $arg) :
        echo $arg. ' ';
    endforeach;
    echo '<br>';
}

get_argument ("Hello", "Elzero", "Web", "School");
get_argument("I", "Love", "PHP");
echo '<br>';
echo '<br>';
echo '<br>';







/* 03 */
function sum_all (...$nums){
    $result = 0;
   foreach ($nums as $num):
      if ($num !=5){
        if ($num == 10){
            $result += $num + 10;
        }else {
        $result += $num;
      }
      }
   
    endforeach; 
    return $result.'<br>';
    
}

echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo '<br>';
echo sum_all(5, 10, 5, 10); // 40
echo '<br>';







/* 04 */
// Write Function Content Here
function multiply(...$Args){
    $result = 1;
    foreach ($Args as $Arg):
        if (gettype ($Arg) == gettype (0) || gettype ($Arg) == gettype (0.0)  ){
           if(gettype($Arg) ==  gettype (0.0)){
           // $Arg = ((int)$Arg);
            $result *= (int)$Arg;
           }else {
            $result *= $Arg;
           }
        }
    endforeach;
    return $result.'<br>';
    
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
echo '<br>';
echo "<br>";




/* 05 */
function check_status($a, $b, $c) {
    if (gettype ($a) == gettype("")){
        if (gettype ($b) == gettype (0) && $c = "ture"){
            return "Hello ".$a.", Your Age Is ".$b.", You Are Available For Hire <br>" ;
        }elseif (gettype ($b) == gettype (0) && $c = "false") {
            return "Hello ".$a.", Your Age Is ".$b.", You Are Not Available For Hire <br>" ;
        }elseif (gettype ($c) == gettype (0) && $b = "ture"){
            return "Hello ".$a.", Your Age Is ".$c.", You Are Available For Hire <br>" ;
        }elseif (gettype ($c) == gettype (0) && $b = "false") {
            return "Hello ".$a.", Your Age Is ".$c.", You Are Not Available For Hire <br>" ;
        }
    } 
    if (gettype ($a) == gettype(0)){
        if (gettype ($b) == gettype ("") && $c = "true" ){
            return "Hello ".$b.", Your Age Is ".$a.", You Are Available For Hire <br>" ;
        }elseif (gettype ($b) == gettype ("") && $c = "false"){
            return "Hello ".$b.", Your Age Is ".$a.", You Are Not Available For Hire <br>" ;
        }elseif(gettype ($c) == gettype ("") && $b = "true"){
            return "Hello ".$c.", Your Age Is ".$a.", You Are Available For Hire <br>" ;
        }elseif (gettype ($c) == gettype ("") && $b = "false") {
            return "Hello ".$c.", Your Age Is ".$a.", You Are Not Available For Hire <br>" ;     
        }
    }
    elseif ($a == "true"){
        if (gettype ($b) == gettype ("") && gettype ($c) == gettype(0)){
            return "Hello ".$b.", Your Age Is ".$c.", You Are Available For Hire <br>" ;
        }elseif (gettype ($c) == gettype ("") && gettype ($b) == gettype(0)) {
            return "Hello ".$c.", Your Age Is ".$b.", You Are Available For Hire <br>" ;
        }
    }
    else{
        if (gettype ($b) == gettype ("") && gettype ($c) == gettype(0)){
            return "Hello ".$b.", Your Age Is ".$c.", You Are Not Available For Hire <br>" ;
        }elseif (gettype ($c) == gettype ("") && gettype ($b) == gettype(0)) {
            return "Hello ".$c.", Your Age Is ".$b.", You Are Not Available For Hire <br>" ;
        }
    }
  }
  
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
  echo '<br>';
  echo '<br>';






  /* 06 */
  // Write Function Content Here
   function calculate($num1 , $num2 , $oper = "a"){
      if ($oper == "a" || $oper == "add"){
        return $num1 + $num2 ."<br>";
      }elseif ($oper == "s" || $oper == "subtract"){
        return $num1 - $num2 ."<br>";
      }elseif ($oper == "m" || $oper == "multiply") {
        return $num1 * $num2 ."<br>";
      }else {
        return "Not defined";
      }
   }
 // Needed Output
  echo calculate(10, 20); // 30
  echo calculate(10, 20, "a"); // 30
  echo calculate(10, 20, "s"); // -10
  echo calculate(10, 20, "subtract"); // -10
  echo calculate(10, 20, "multiply"); // 200
  echo calculate(10, 20, "m"); // 200
  echo '<br>';
  echo '<br>';







  /* 07 */
  function calculator(int $num_one, int $num_two) : float {
    return $num_one + $num_two;
  }
  
  echo calculator(20, 10); // 30
  echo '<br>';
  echo gettype(calculator(20, 10)); // Double
  echo '<br>';





  /* 09 
  // Write Function Content Here
        $greet = function ($one){
        return "Hello ".$one ;
     };*/

     $greet = fn ($one) => "Hello ".$one;
  // Needed Output
  echo $greet("Osama"); // Greetings