<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial number</title>
</head>
<body>
    <h3>Factorial number</h3>

    <?
    if(isset($_REQUEST['submit'])){
        $mynum=$_REQUEST["mynum"];
        $finalnum=1;
        for($i=1; $i<=$mynum; $i++){
            $finalnum *= $i;
           echo $finalnum ;
        }
        
    }
        
    
    ?>

    <form action="" >
    <input type="number" name="mynum" placeholder="Enter your number"> <br> <br>
    <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>