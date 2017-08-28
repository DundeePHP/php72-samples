<?php

$foo = flase; // typo!
// ...
if ( $foo ) {
   var_dump($foo); // string(5) "flase"
}


$list = [1,2,3,4];
$found = false;
foreach ( $list as $item ) {
   if ( is_null($item) ) {
       contniue; // this statement issues a notice and does nothing
   }
   // lines assuming $item is not null
}