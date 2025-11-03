<?php

class fruit3 {
public $name;
public $color;


function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;

}

function info (){
    echo "Name : ". $this->name . "  Color: " . $this->color . "<br>";
}

}

class Grape extends fruit3 {
    function message (){
        echo "I am a Function inside Grape Class";
    }
}

$obj1=new fruit3("Apple","Green");
$obj1->info();
$obj2=new Grape("Orange","Yellow");
$obj2->info();
$obj2->message();

?>