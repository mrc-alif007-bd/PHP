<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>
</head>
<body>

<!-- A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables) -->

<? 
/*PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/
?>
<?
$x=10;//intager value
$name="name";//string value
$_age=15;
$_10age=51;
$z=null;//null value
$copmmission=15.5;//float,dobule value
$fruit = ["Mango","Banana","Orange","Watermalon"];//Array value
$success = true;//Boolean value

class person{
    public $name="Rakib";
}
    $person = new person ;

echo "<pre>";
var_dump($x);//describ the Variable
var_dump($fruit);//describ the Variable
var_dump($name);//describ the Variable
var_dump($success);//describ the Variable
var_dump($person);//describ the Variable


?>
</body>
</html>