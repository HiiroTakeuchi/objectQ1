<?php
 require_once("car.php");

 class Honda extends Car {
   function __construct(){
   
     $this->price = 6000000;
     $this->capacity = 5;
     $this->acceleration = 7.2; 
   }
}
 