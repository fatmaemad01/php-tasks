<?php
/* تكليف 01 */
$index = 10 ;
while ($index > 0){
    echo $index ;
    echo '<br>';
    $index-- ; 
}
echo '-----------------------';
echo '<br>';



/* تكليف 02 */
$Index = 0;
/*while ($Index <= 18){
    echo $Index +=2 ;
    echo '<br>';
}
echo '-----------------------';
echo '<br>';


do {
    echo $Index +=2 ;
    echo '<br>';
}
while($Index <= 18);*/

for (; $Index <= 18 ;){
    echo $Index+=2;
    echo '<br>';
}
echo '-----------------------';
echo '<br>';




/* تكليف 03 
$num = 2;
while ($num < 520) {
 
 $num*2;
 echo $num;
 echo '<br>';
 
}*/

/* Needed Output
1
4
10
22
46
94
190
382
*/


/* تكليف 04 

$start = 10;
$end = 0;
$stop = 3;

for ($start ; $start >= $stop ; $start-- ){
    if ($start < 10){
        echo $end.$start;
    }else{
        echo $start;
    }
    echo '<br>';
}
echo '-----------------------';
echo '<br>';*/





/* تكليف 05 */
$Start = 0;
$Start++;
$mix = [1, 2, 3, "A", "B", "C", 4];
foreach ($mix as $Mix ){
    if ($Mix > $Start && gettype($Mix) == gettype($Start)){
        echo $Mix;
        echo '<br>';
    }else {
        continue;
    }
}
echo '<br>';
echo '-----------------------';
echo '<br>';



/* التكليف 06 */
$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach($money as $name => $neededMoney){
    echo "The Name Is $name And I Need $neededMoney Pound From Him";
    echo '<br>';
}
echo '------------------';
echo "<br>";




/* 07 */
$mix = [1, 2, "A", "B", "C", 3, 4];
$count = 0;
$counter = 0;
foreach ($mix as $Numbers){
    if (gettype($Numbers) != gettype ("A")){
        echo $Numbers;
        echo '<br>';
        $count++;
    }else {        
        $counter++;
        continue;
    }
}
echo '<br>';
echo $count.' Numbers Printed';
echo '<br>';
echo $counter.' Letters Ignored';
echo '<br>';
echo '----------';
echo '<br>';






/* التكليف 08 */
$nums = [1, 13, 12, 20, 51, 17, 30];
foreach ($nums as $number){
    if ($number %2 == 0){
        echo $number/2;
        echo '<br>';
    }else{
        continue;
    }
}
echo '<br>';
echo '----------';
echo '<br>';





/* 09 
$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
foreach ($names as $Name){
    foreach ($nums as NUM) {
        if ( $NUM == ($help_num --)){
            echo $Name;
        }
    }
    
}
echo '<br>';
echo '----------';
echo '<br>';
*/






