<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Result</h3>
    <form action="" method="post">
        <input type="number" name="student_id">
        <input type="submit" name="search" value="SEARCH">
    </form>

    <?php
    if(isset($_REQUEST['search'])){
        $stid = $_REQUEST['student_id'];

        include ("student_class.php");

        $sheet = new student("student.txt"); // Parameter -> Class 
        $result = $sheet->result($stid);
        echo $result;
    }
    ?>
</body>
</html>