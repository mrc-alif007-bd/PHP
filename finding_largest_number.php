<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Finding Largest Number</h3>
     <?
    
    $numbers=[5, 3 , 7, 9, 11 ];
    $largn=$numbers[0];
    for($i=0; count($numbers)>$i; $i++){
        if($largn<$numbers[$i]){
            $largn=$numbers[$i];
        }
        
    }

echo $largn;

    ?>

    <form action="" >
    <input type="number" name="mynum" placeholder="Enter your number"> <br> <br>
    <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>