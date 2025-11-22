<?php include_once("db_config.php");  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border: 2px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>

<?php 

$sql = "SELECT * FROM students";//asc //"SELECT * FROM students ORDER BY employeeID desc";
$result = $db->query($sql); 
//$row = $result->fetch_assoc();



// echo $row['employeeID'];
// echo $row['first_name'];
// echo $row['last_name'];
// echo $row['birthdate'];


?>
<body>
    
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Birthdate</th>
        <th>Notes</th>
        <th colspan="2">Action</th>

    </tr>
    <?php
    while($row1 = $result->fetch_object()):
    ?>
    <tr>
        <td><?php echo $row1->employeeID;?></td>
        <td><?php echo $row1->first_name;?></td>
        <td><?php echo $row1->last_name;?></td>
        <td><?php echo $row1->birthdate;?></td>
        <td><?php echo $row1->notes;?></td>
        <td><a href="student_edit.php?id=<?php echo $row1->employeeID;?>">Edit</a></td>
        
        <td><a onclick="return confirm('Are YOU SURE')" href="student_delete.php?id=<?php echo $row1->employeeID;?>">Delete</a></td>
    </tr>
    <?php endwhile; ?>
</table>

<a href="student_entry.php">New Entry</a>

</body>
</html>