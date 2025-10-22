<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo_print</title>
</head>
<body>

<?
// echo has no return value, while print has a return value of 1 so it can be used in expressions
// echo can take multiple parameters, while print can take one argument
// echo is marginally faster than print
?>



<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
print "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 
</body>
</html>