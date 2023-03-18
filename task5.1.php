<?php
/* التكليف 01
  Check That:
  Variable "b" Larger Than Variable "a"
  Variable "a" Identical To Variable "c"
  Variable "a" Plus Variable "c" Identical To Variable "b"
*/
$a = 100;
$b = 200;
$c = 100;
if ($b > $a && $a === $c && ($a+$c)=== $b) {
    echo "Yes";
}
echo '<br>';
echo '<br>';



/*
 التكليف 02
*/
$A = 400;
$B = 200;
$C = 300;
if ($A > $B) {
    echo "A Larger than B";
} elseif ($A > $C){
    echo "A Larger than C";
} else {
    echo "A is not larger than B or C";
}

echo '<br>';
echo '<br>';

$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}

(($a+$b === $c ? "A + B = C" : ($a + $c === $b) )? "A + C = B" :  $b + $c === $a )? "B + C = A" : "The End" ;
echo '<br>';
echo '<br>';

//`(a ? b : c) ? d : e`
// Output
//"B + C = A"


$name = "Osama";
$age = 40;
$country = "Egypt";

if ($age > 18) echo "The Age Is Good To Go<br>";
if (gettype($name) === "string")  echo "The Name Is Good To Go<br>";
if ($country === "Egypt") echo "The Country Is Good To Go<br>";

echo '<br>';
echo '<br>';
  
  
$genre = "Hack And Slash";
switch ($genre) {
    case "RPG" :
        echo "I Recommend Ys Games";
        break;

    case "Hack And Slash" :
        echo "I Recommend Castlevania Games";
        break;

    case  "FPS" :
        echo "I Recommend Uncharted Games";
        break;

    case "Platform" :
        echo "I Recommend Megaman Games";
        break;

    case  "Puzzle" :
        echo "I Recommend Megaman Games";
        break;

     default :
         echo "I Recommend Shadow Of Mordor And Shadow Of War";


}
        echo '<br>';
        echo '<br>';


$num_one = 23;
$num_two = 5;
$op = "+";
switch ($op) {
    case "+" :
        echo $num_one + $num_two ;
        break;

    case "-" :
        echo $num_one - $num_two ;
        break;

    case "*" :
        echo $num_one * $num_two ;
        break;
    
    case "/" :
        echo $num_one / $num_two ;
        echo '<br>';
        echo $num_one % $num_two ;
        break; 
        
    default :
        echo "Unknown Operation";  

}

echo '<br>';
echo '<br>';

$day = "Sun";
   
if ($day =="Sat" ||$day == "Sun" || $day == "Mon") {
     echo "We Are Open All The Day";
}
elseif ($day == "Tue" || $day == "Wed") {
    echo "We Are Open From 08:12";
}
elseif ($day == "Thu" || $day == "Fri") {
    echo "We Are Closed";
}
else {
       echo "Unknown Day";
 }
  
  





