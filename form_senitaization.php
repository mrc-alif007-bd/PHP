<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
        tr,
        td {
            border: 2px solid #000;
            border-collapse: collapse;
            text-align: left;
        }
    </style>

</head>

<body>

    <?php
    if (isset($_REQUEST['submit'])) {
        $skills_output = "";
        $language_output = "";
        $name = "";
        $email = "";
        $errors = [];
        if (!isset($_REQUEST['fullname']) || $_REQUEST['fullname'] == "") {
            $errnam = "Enter Your Name"  . "<br>";
            echo $errnam;
        } else {
            $name = $_REQUEST['fullname'];
        }

        if (!isset($_REQUEST['email']) || $_REQUEST['email'] == "") {
            $erreml = "Enter Your Email"  . "<br>";
            echo $erreml;
        } else {
            $email = $_REQUEST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Email mis not Valid";
            }
        }

        if (!isset($_REQUEST['language'])) {
            $errlang = "You Must Select One language" . "<br>";
           echo $errlang;
        } else {
            $language = $_REQUEST['language'];  //array..........
            // print_r($_REQUEST['language']);
            foreach ($language as $lang) {
                $language_output .= $lang . ",";
            }
        }

        if (!isset($_REQUEST['skills'])) {
            $errskill = "You Must Select One Skill" . "<br>";
            echo $errskill;
        } else {

            $skills = $_REQUEST['skills']; //array..........
            // print_r($_REQUEST['skills']);
            foreach ($skills as $skill) {
                $skills_output .= $skill . ",";
            }
        }

        // echo "<pre>";
        // print_r($_REQUEST);


        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "SKILLS";
        // print_r($_REQUEST['skills']);
        // echo "language";
        // print_r($_REQUEST['language']);
    ?>

        <table>
            <tr>
                <td>Name :</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>language :</td>
                <td><?php echo $language_output; ?></td>
            </tr>
            <tr>
                <td>Skills :</td>
                <td><?php echo $skills_output; ?></td>
            </tr>
        </table>
        <br><br>


    <?php

        
    }
    ?>

    <form action="" method="post">
        Name : <br>
        <input type="text" name="fullname" placeholder="Enter Your Name" 
        value="<?php if(isset($_REQUEST['fullname'])){
            echo ($_REQUEST['fullname']) ;
            } ?>"> <br>
        Email : <br>
        <input type="text" name="email" placeholder="Enter Your Email" 
         value="<?php if(isset($_REQUEST['email'])){
            echo ($_REQUEST['email']) ;
            } ?>">  <br>
        language : <br>
        <select name="language[]" multiple="multiple" id="">
            <option value="Csharp">C#</option>
            <option value="JS">JS</option>
            <option value="PHP">PHP</option>
            <option value="Peri">Peri</option>
        </select><br>
        Skills : <br>
        <input type="checkbox" name="skills[]" value="Csharp" id="">C#
        <input type="checkbox" name="skills[]" value="js" id="">js
        <input type="checkbox" name="skills[]" value="php" id="">php
        <input type="checkbox" name="skills[]" value="peri" id="">peri

        <br><br>

        <input type="submit" value="SUBMIT" name="submit"> <br><br>

    </form>

    

</body>

</html>