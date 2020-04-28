<?php

  class Car{

   
      protected $price = "";
      protected $capacity = "";
      protected $acceleration = "";


      function ReturnPrice(){
         $format_price = number_format( $this->price);
          return $format_price;
      }

      function ReturnCapacity(){
          return $this->capacity;

      }

      function ReturnAcceleration(){
          return $this->acceleration;
      }