<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <!-- Unlike variables, constants are automatically global across the entire script. -->
    <!-- Using define -->
    <?
    define("HELLO","Welcome to PHP<br>");

    echo HELLO;

    ?>
    <!-- const Keyword -->
     <?
     const NAME = "Taufikur Rahman<br>";
     const AGE ="20<br>";

     echo "NAME :" . NAME . "AGE :" . AGE ;

    

     ?>
</body>
</html>