
<?php 
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
?>