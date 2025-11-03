<?php

class fruit {

    public $name;
    public $color;

}

$fruitobj = new fruit;

$fruitobj->name = "Mango "."Banana "."Apple ";

$fruitobj->color = "red "."black "."blue ";

$fruitobj2 = new fruit;

$fruitobj2->name = "Banana ,"." Apple ";

$fruitobj2->color = "Yellow ,"." red ";


var_dump($fruitobj2)

?>