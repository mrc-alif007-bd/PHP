<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="number" name="numbers" placeholder="Enter your numbers"><br><br>

    <input type="submit" name="submit" value="check" >

    </form>

<?php
if(isset($_REQUEST['submit'])){
    $numbers=array(
        $_POST['num1'],
        $_POST['num2'],
        $_POST['num3'],
        $_POST['num4'],
        $_POST['num5']
    );
    $largest = $numbers[0];
    $lowest = $numbers[0];
    for ($i=1; $i <count($numbers);$i++){
        
    }

}
$numbers
?>

</body>
</html>