<?php
$con=new mysqli("localhost","root","", "kh" ) or die("هونك خطا في فاعد البيانات "); 


 $object1 = new User(); 
 $object1->name = "kkkkkkkk"; 
 $object2 = $object1;
  $object2->name = "kh"; 
  echo "object1 name = " . $object1->name . "<br>";
   echo "object2 name = " . $object2->name;
 class User {   
    
    public $name; } 



$object1 = new User1(); 
$object1->name = "Alice"; 
$object2 = clone $object1;
 $object2->name = "Amy"; 
 echo "object1 name = " . $object1->name . "<br>";
  echo "object2 name = " . $object2->name; 
  class User1 {  
    public $name; }

?>  