<?php
abstract class abstract_class {
    public $name ;
    public $address ;

    function __construct($name, $address)
    {
        $this->name = $name;   
        $this->address = $address;   
    }
    abstract function profile();
}

class childClass extends abstract_class{
    function profile(){
        $details = "" ;
        $details .= "Name : " . $this->name . "<br>" ;
        $details .= "Address : " . $this->address . "<br>" ;

        return $details;
    }
}
$tareq= new childClass("engineer@tareq.com", "Farmgate");
 echo $tareq->profile();

?>