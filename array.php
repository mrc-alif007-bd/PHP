<?php
// array(10, 12, 13, 15);
// [10, 12, 13, 15];
// ["sunday", "monday", "friday"];


$contries = ["bangladesh"=>"dhaka","nepal"=>"kathmondu","australia"=>"sydney"];
 ksort($contries);
// sort($contries);

foreach($contries as $Contry=>$capital) {
    echo "Contry:- $Contry -Capital:- $capital <br>" ;
    }
?>