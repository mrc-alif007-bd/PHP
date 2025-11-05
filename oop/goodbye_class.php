<?php
class goodbye_class {
    const MYMSG = "We are Learning PHP OOP";
    const MYMSG2 = "We are about Constant using in OOP";

function Info(){
    echo self::MYMSG2;
}

} //End of class 

echo goodbye_class::MYMSG;

$obj1 = new goodbye_class;
$obj1->Info();
?>