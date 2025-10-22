<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If_elif_else</title>
</head>
<body>
    <?
    $x=80;
    if($x<=100){
        echo $x . " You got A+" . "<br>";
    }
    else if($x<=80){
        echo $x ." You got A" . "<br>";
    }
    else if($x<=60){
        echo $x ." You got A-" . "<br>";
    }
    else if($x<=40){
        echo $x ." You got B" . "<br>";
    }
    else{
        echo $x . " You got F" . "<br>";
    }
    ?>
    <?
    for($i=0;$i<=50;$i++){
        echo $i."<br>";
    }
    ?>
</body>
</html>