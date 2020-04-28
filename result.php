<?php
 require_once("Honda.php");
 require_once("Ferrari.php");
 require_once("Nissan.php");

 $honda = new Honda;
 $ferrari = new Ferrari;
 $nissan = new Nissan;



 $h_price = $honda->ReturnPrice();
 $h_capacity = $honda->ReturnCapacity();
 $h_acceleration = $honda->ReturnAcceleration();

 

 
 $f_price = $ferrari->ReturnPrice();
 $f_capacity = $ferrari->ReturnCapacity();
 $f_acceleration = $ferrari->ReturnAcceleration();



 
 $n_price = $nissan->ReturnPrice();
 $n_capacity = $nissan->ReturnCapacity();
 $n_acceleration = $nissan->ReturnAcceleration();



 
 echo " Q1. <br>";


 echo"HONDAの価格は".$h_price."円で、定員は".$h_capacity."人、加速度は".$h_acceleration."m/s²です。<br>";

 echo"FERRARIの価格は".$f_price."円で、定員は".$f_capacity."人、加速度は".$f_acceleration."m/s²です。<br>";

 echo"NISSANの価格は".$n_price."円で、定員は".$n_capacity."人、加速度は".$n_acceleration."m/s²です。<br>";
 
 