<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number check</title>
</head>
<body>
    <h3>Checking Number if Prime or not</h3>

    <?
    if(isset($_REQUEST['submit'])){
        $mynum = $_REQUEST['mynum'];

        //find Prime
        if($mynum==1){
            echo "$mynum is not a Prime number";
            exit;
        }
        if($mynum==2){
            echo "$mynum is a Prime number";
            exit;
        }

        if($mynum>2){
            for($i=2; $i<$mynum; $i++){
                if($mynum % $i ==0){
                    echo "$mynum is not a prime number";
                    exit;
                }
            }
            echo "$mynum is a prime number";
            exit;
        }
        
       
    }
    ?>
    <form action="" >
    <input type="number" name="mynum" placeholder="Enter your number"> <br> <br>
    <input type="submit" name="submit" value="CHECK">
    </form>
</body>
</html>