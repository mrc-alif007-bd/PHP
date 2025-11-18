<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Student Entry Form</h3>
    <form action="" method="post">
        First Name : <br>
        <input type="text" name="fname" placeholder="Enter name"><br>
        Last Name : <br>
        <input type="text" name="lname" placeholder="Enter name"><br>
        Date of Birth : <br>
        <input type="date" name="dob" placeholder="Enter date"><br>
        Notes : <br>
        <textarea name="notes" placeholder="Enter notes"></textarea> <br>

        <input type="submit" name="submit" value="SUBMIT">

    </form>
    <a href="pawd_68_students.php">Student List</a>

    <?php
    include_once("db_config.php");
    if (isset($_POST['submit'])):
        // $Fname = ($_REQUEST['fname']);
        // $Lname = ($_REQUEST['lname']);
        // $DOB = ($_REQUEST['dob']);
        // $Notes = ($_REQUEST['notes']);

        extract($_POST);

        $sql = "INSERT INTO students VALUE (NULL,'$fname','$lname','$dob','$notes')";


        $db->query($sql);

        if($db->affected_rows){
            echo "<h3>Entry Successfull<h3>";
        }

    endif;

    ?>
</body>

</html>