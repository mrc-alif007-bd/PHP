<?php

$valu1 = "Hello";
$valu2 = & $valu1 ;
$valu2 = "World" ;



echo $valu2 ;
echo $valu1 ;

?>