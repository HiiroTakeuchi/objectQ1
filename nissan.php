<?php
 require_once("car.php");

 class Nissan extends Car {
   function __construct(){
     $this->price = 4000000;
     $this->capacity = 4;
     $this->acceleration = 6.8;


 }
 }