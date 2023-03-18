<?php  
/* الكليف 01 
 بسهولة  Elzero Courses المطلوب استخدام المتغيرات لتغيير  
*/
$content = "Elzero Courses" ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?= $content; ?>>
    <title>Welcome To <?= $content; ?></title>
  </head>
  <body>
    <h1><?= $content; ?></h1>
    <p>Here In <?= $content; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?= $content; ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?= $content; ?></footer>
  </body>
</html>



<?php
echo '<br>';
echo '<br>';
echo '<br>';

/* الكليف 02
    بخمس طرق web مطلوب طباعة  
*/
  $name = "elzero";
  $$name = "Web";
  echo '<br>';
  echo $$name;
  echo '<br>';
  echo $elzero;
  echo '<br>';
  echo "${$name}";
  echo '<br>';
  echo "${elzero}";
  echo '<br>';
  echo "Web";
  echo '<br>';
  echo '<br>';

  

  /* 
     التكليف 03
  */
  $a = 200;
  $b = &$a;
  $a = 100;
  echo $b;
  echo '<br>';
  echo '<br>';


   /* تكليف 04 : غشيتو غش  */
  print_r($_SERVER["DOCUMENT_ROOT"]);
  echo '<br>';
  print_r($_SERVER["HTTP_HOST"]);
  echo '<br>';
  print_r($_SERVER["SystemRoot"]);
  echo '<br>';
  print_r($_SERVER["OPENSSL_CONF"]);
  echo '<br>';
  echo '<br>';


  /* تكليف 05 :كلمات محجوزة 
     break , clone , _FILE_ , _LINE_ , empty , isset , unset , if , while , include
  */


  /* تكليف 06  */
  echo __LINE__;
  echo '<br>';
  echo __FILE__;
  echo '<br>';
  echo __dir__;
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';


