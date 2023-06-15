
<?php
/* ----------- Arrrays ----------- */

/*
  
  arrays are collections of items or data of the same data type stored at contogious memory location.
  Arrays hold multiple values. Each value in an array is called an "element"
*/
//example of an array
// simple arrys of numbers
//An example of Index Array
//$numbers=[1,2,3,4,5,6,7,8,9];


// simple array of strings
//$colors= ["white,red,blue,black,yellow,orange,<br>"];
//$colorss= "colourless";
//echo $colorss;
//echo $colors[4];
//var_dump($colors);
//print_r($numbers);
// Types of Arrays
//1.index arrays 
// 2: Associative Arrays- they allow us  to use name keys to identify values
// single dimention arrays
/*$rangi=[
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '00f',
];
echo count($rangi);
//echo $rangi['red'];
//var_dump($rangi);
// 3: multidimention arrays*/
/*$people = [
  $person1=[
    'first name' => 'Ruth',
    'last name' => 'Gitau',
    'email addres' => 'gitaur72 @gmail.com'
    ],






    

  $person2=[
    'first name' => 'Sheila',
    'last name' => 'Gitau',
    'email addres' => 'sheilag@gmail.com'
  ],

  $person3=[
    'first name' => 'Rachel',
    'last name' => 'Gitau',
    'email addres' => 'raechel998@gmail.com'
  ]
    
  ];
 
   echo $people[1]['email addres'];
   */

   /*assignment
   Create a php script which displays the capital and coutry name from the array $countcap .Sort the list by the name of the capital*/
   $countcap=array(
    "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France"=>"Paris",
     "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany"=>"Berlin", "Greece"=>"Athens", "Ireland"=>"Dublin","Netherlands"=>"Amsterdam",
     "Portugal"=>"Lisbon","Spain"=>"Madrid","Sweden"=>"Stockholm", "United kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuana"=>"Vilnius",
     "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valleta", "Austria"=>"Vienna",
     "Poland"=>"Warsaw");
     asort($countcap);
     foreach($countcap as $country =>$capital){
      echo "$country = $capital <br>";
     }

     echo"Enter your name";
     $name=fgets(STDIN);
     echo"Your name is ".$name;

  


   

     