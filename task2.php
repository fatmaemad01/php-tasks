<?php

/*  التكليف 01 
    echo 15.2 + 14.7 + (10.5 + 10.5); // 50
    echo 15.2 + 14.7 + (10.5 + 10.5); // Integer
    int المطلوب: تحويل القيمة في السطر الاول الى 50 والسطر الثاني يرجع قيمة 
*/
echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
echo '<br>';
echo gettype ((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer
echo '<br>';



/*   التكليف 02 
     رقم 100 
     المطلوب: استخدم طريقتين لايجاد نوع البيانات
*/
echo gettype (100);
echo '<br>';
var_dump(100);
echo '<br>';
echo '<br>';



/*  التكليف 03 
    echo "???";
    المطلوب : ازالة علامات الاستفهام واستبدالها بالجملة التالية
    Needed Output => Hello "Elzero" \\ """ We Love "$$PHP"
 */
echo " Hello \"Elzero\" \\\\ \"\"\" We love \" $$ PHP\" ";
echo '<br>';
echo '<br>';



/*  التكليف 04 
    "We \n Love \n Elzero \n Web \n School" 
    المطلوب : نخلي كل كلمة ع سطر
*/

echo nl2br ("We \n Love \n Elzero \n Web \n School");     
echo '<br>';
echo '<br>';
echo '<br>';



/*  التكليف 05
    المطلوب : طباعة الكود كما هو دون استخدام باك سلاش
*/
echo nl2br(<<<'print'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
print);
echo '<br>';
echo '<br>';



/* التكليف 06
  $something = "Programming";
  echo <<<'code'
  Hello \PHP\
  We Love $something
        code;
      المطلوب: اللي تحت 
   [1] Fix The Error
   [2] Remove 2 Characters To Get The Output

*/
$something = "Programming";
echo <<<code
Hello \PHP\
We Love $something
code;

echo '<br>';
echo '<br>';





/* التكليف 07
   لديك الكود التالي 
   echo "Hello PHP";
   echo '<br>';
   echo "Hello PHP";
   int المطلوب : استخدم ما تعلمته ليكون ناتج السطر الاول هو 1 والسطر التاني هو 
*/
echo ((bool)"Hello PHP");
echo '<br>';
echo gettype ((int)((bool)"Hello PHP"));
echo '<br>';
echo '<br>';






/* التكليف 08
كتابة المصفوفة 
 */

echo '<pre>';
print_r (
  [

    'FrontEnd' => [
      
        '0'=> 'HTML',
        '1'=> 'CSS',
        'JS' =>[
          'Vuejs'=>[
            '2'=> 'v2',
            '3' => 'v3'
          ],
          '0' =>'Reacting',
          '1' => 'Svelte'

      ]
        ],
        'BackEnd'=>[
          '0'=> 'php',
          '1' => 'MySQL',
          '2' => 'Security'
        ],
        '0'=> 'Git',
        '1'=> 'Github',
        'Testing'=>[
          '0'=>'Unit Testing',
          '1'=> 'End To End',
          '2'=> 'Integration'
        ]

  ]
  
  
           );
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
