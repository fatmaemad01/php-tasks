<?php 

/* النكليف 01 م عرفت احلو وما حاولت كتير */
/* تكليف 02 */
$a = "10";

/*Needed Ouput
10
"integer"
10
"integer"
10
"integer" */

echo $a+0 ;
echo '<br>';
echo gettype($a+0);
echo '<br>';
echo ((int) $a );
echo '<br>';
echo gettype ((int) $a );
echo '<br>';
echo (int)($a);
echo '<br>';
echo gettype ((int)($a));
echo '<br>';
echo '<br>';

/* تكليف 03 */
$a = 10;
$b = 20;
var_dump($a <=> $b);
echo '<br>';
echo '<br>';


/*
 تكليف 04 
 طلع معي تكرار بالحل
 */
$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
echo '<br>';
var_dump($c >= $a); // True
echo '<br>';
var_dump($a <= $b); // True
echo '<br>';
var_dump($a <> $b); // True
echo '<br>';
var_dump($a < $c); // True
echo '<br>';
var_dump($a != $c); // True
echo '<br>';
var_dump(gettype($a) === gettype($b)); // True
echo '<br>';
var_dump(gettype($a) == gettype($b)); // True
echo '<br>';
var_dump(gettype((float) $a) !== gettype($b)); // True
echo '<br>';
echo '<br>';



/* التكليف 05 


// Write Your Code Here

echo $points; // 13

// Write Your Code Here

echo $points; // 8;
*/
$points = 10;
$points ++ ;
$points ++ ;
$points ++ ;
echo $points;
echo '<br>';
$points = 10;
$points -- ;
$points -- ;
echo $points;
echo '<br>';
echo '<br>';
echo '<br>';



/* تكليف 06 */
$s = "Elzero";
$n = "Web";
$m = "School";
$d = $s.' '.$n.' '.$m; 
$d = "{$s} {$n} {$m}";
$d = "$s $n $m";
$d = "$s $n ".$m;
$d = "{$s} {$n} ".$m;
echo $d;
echo '<br>';
echo '<br>';
echo '<br>';


/* التكليف 07 */
$k = 10;
$l = 20;
echo(($k + $l) * ($k + $l) + ($k * $k ))* $k;
echo '<br>';
echo '<br>';
echo '<br>';


/* تكليف 08 
// Code 1
@$e = $g or die("custom error") ;
echo $e;  */

/*// Code 2
@$f = file("Not_A_File") or die("custom error");
echo $f;*/

// Code 3
(@include("Not_A_File")) or die("error");  
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

