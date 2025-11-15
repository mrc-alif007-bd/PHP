<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>login form</h3>
<form action="" method="post">
    <input type="text" name="fullname" placeholder="Username"> <br>
    <input type="text" name="email" placeholder="enter your email"> <br> <br>
    <input type="submit" name="submit" value="SUBMIT">
</form>

<?php
if(isset($_REQUEST['submit'])){
    $name ="";
    $email="";
    $errors=[];

    if (!isset($_REQUEST['fullname']) || $_REQUEST['fullname'] == "") {
           echo  "Enter Your Name"  . "<br>";
        }
        elseif(strlen($_REQUEST['fullname']) <4 || strlen($_REQUEST['fullname']) >8 ) {
            echo "Name Must be 4 to 8 charecter";
        }
        else {
            $name = $_REQUEST['fullname'];
        }
        if (!isset($_REQUEST['email']) || $_REQUEST['email'] == "") {
            echo  "Enter Your Email"  . "<br>";
            
        } else {
            $email = $_REQUEST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo  "Email is not Valid";
                
            }
        }
        if(count($errors)>0){
            foreach($errors as $error){
                echo $error . "<br>";
            }
        }
        if(empty($errors)){
            echo "Login successfull";
        }
               
        
           
            
        
        
}

?>

</body>
</html>