<?php

/* TASK 01 */
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$num_two = (int) $num_two;
$str [$num_one] = $let_one;
$str [$num_two] = $let_two;
echo $str; // Elzero
echo '<br>';
echo '<br>';




/* TASK 02 */
$string = "Orezle";
echo ucfirst(strrev (lcfirst( $string))); 
echo '<br>';
echo '<br>';




/* TASK 03 */
$stri = 'aAa';
$num = 3;
$char = "_";
 
echo chunk_split(str_repeat(strtolower ($stri) , $num) , $num , $char) ; 
echo '<br>';
echo '<br>';




/* TASK 04 */
$Str = "<div><b>Elzero</b></div>";
echo strip_tags($Str , "<div>");
echo '<br>';
echo '<br>';




/* TASK 05 */

$st = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo (substr_count (strrev($st) , lcfirst ($o) , $four)).'<br>';
echo  (substr_count (strrev($st) , $e)).'<br>';
echo '<br>';


echo '<br>';


/* TASK 06 */
$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars);
echo '<br>';
echo '<br>';




/* TASK 07 */
$charch = ["E", 1, 2, "l", "z", "E", "R", "o"];

foreach ($charch as $Char) :
    
    if (gettype($Char) == gettype("")){
        echo lcfirst($Char); 
    }else {
        continue;
    }
endforeach;
