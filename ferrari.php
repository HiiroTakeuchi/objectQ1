<?php
 require_once("car.php");

 class Ferrari extends Car {
   
   function __construct(){

     $this->price = 10000000;
     $this->capacity = 2;
     $this->acceleration = 10;

 }
}