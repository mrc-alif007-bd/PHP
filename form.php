<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?
    //$_GET,$_POST,$_REQUEST
    // echo "<pre>";
    // var_dump($_POST);
    // print_r ($_POST);
    // echo "</pre>";
    
    if(isset($_GET['submit'])){
        $fullName = $_GET['fullname'];
    $Email = $_GET['email'];
    $Phone = $_GET['phone'];

        echo "Full name : " . $fullName . "<br>";
        echo "Email : " . $Email . "<br>";
        echo "Phone Number : " . $Phone . "<br>";
    }


    ?>
    <h3>Registration Form</h3>
   <form action="" method="get">
     Name : <br>
    <input type="text" name="fullname" placeholder="Enter your Full Name"><br>
    Email : <br>
    <input type="text" name="email" placeholder="Enter your Full Email"><br>
    Phone : <br>
    <input type="text" name="phone" placeholder="Enter your Phone Number"><br><br>

    <input type="submit" name="submit" value="SUBMIT">
   </form>
</body>
</html>