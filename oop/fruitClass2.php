<?php

class fruit {

    private $name;
    public $color;


    //.....Setter Function.....
    function set_name($name){
        $this->$name = $name;
    }

    //.....Setter Function.....
    function set_color($color){
        $this->$color = $color;
    }

    function get_name_color(){
        return "Name: ".$this->name . "<br>" . "Color: " . $this->color;
    }


}
$obj1 = new fruit;
$obj1-> set_name("apple");
$obj1-> set_color("red");
$obj1->get_name_color();

// $fruitobj = new fruit;

// $fruitobj->name = "Mango "."Banana "."Apple ";

// $fruitobj->color = "red "."black "."blue ";

// $fruitobj2 = new fruit;

// $fruitobj2->name = "Banana ,"." Apple ";

// $fruitobj2->color = "Yellow ,"." red ";


// var_dump($fruitobj2)

?>