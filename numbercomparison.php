<?php
   $x=[
      "1" => "first Integer",
      "0123" =>"The integer index with leading 0",
      "12str" =>"using leading numeric string",
      " 1" => "using leading whitespace",
      "2.2" => "using floating number",
   ];
   print_r($x);

   // php 7.x
var_dump(in_array(0, ['foo', 'bar'])); // true

// php 8.0
var_dump(in_array(0, ['foo', 'bar'])); // false

// php 7.x
var_dump(0 == 'foobar' );// true
  
// php 8.0
var_dump(0 == 'foobar'); // false
?>