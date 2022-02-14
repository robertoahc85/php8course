<?php

var_dump(0 == 'foobar'); // php 7.x true  / php 8.0 true 
var_dump(0 == '0'); // php 7.x true  / php 8.0 true 
var_dump(0 == '0.0'); // php 7.x  true  / php 8.0 true 
var_dump(0 == ''); // php 7.x  true    / php 8.0 false
var_dump(0 == 'foo'); // php 7.x true   / php 8.0 false
var_dump(0 == "31"); // php 7.x true   / php 8.0 true 
var_dump(0 == "   31"); // php 7.x true   / php 8.0 true 
var_dump(0 == "31foo"); // php 7.x true  / php 8.0 false

?>