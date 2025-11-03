<?php

class fruit2 {

    public $name;
    public $color;


    function __construct($name) {
        echo "hello  ". $name . "<br>";
    }
    function __destruct() {
        echo "bye...";
    }
    
}

new fruit2("rahim");

?>