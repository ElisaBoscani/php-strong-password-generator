<?php 
if(isset($_GET["password_lenght"])){
  
  $password_lenght = intval($_GET["password_lenght"]);
  $randomPassword= randomPassword($password_lenght);
  echo  "<p>la password generata è: " . $randomPassword . "</p>";
}
$password_lenght = isset($_GET["password_lenght"]);
/* volevo provare a farlo in un altro modo utilizzando un array multiplo */
/* function randomPassword($length){
  $characters=[ array(
    ["lowercase" => array( "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"),
    "uppercase" => array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"),
    "number" => array(1,2,3,4,5,6,7,8,9,0),
    "symbols" => array("*",".",",","-","_","+","?","!")])
  ];
  $password="";
  for($i = 0; $i < $length; $i++){
      $selectCaracters = array();
    foreach($characters as $key => $value){
     $selectCaracters = array_merge($selectCaracters, $value);
    }
     $randomIndex = array_rand($selectCaracters);
    
     $password = $selectCaracters[$randomIndex];
     var_dump($randomIndex);
     
  }
    
    return $password; 
} */
function randomPassword($password_lenght ){
$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789?!.,;+-_/";
$mischia = str_shuffle($characters) ;
$password =substr($mischia, 0,  $password_lenght );
return $password;

}
?>