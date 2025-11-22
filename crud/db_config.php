<?php 

// $servername = "localhost";
// $username = "username";
// $password = "password";

$host = "localhost";
$user = "root";
$password = "";
$database = "pawd-68";

$db = new mysqli($host, $user, $password, $database);

if($db->connect_error) {

    die ("connection failed : ".$db->connect_error );

}

//echo "connect successfully";

//$db->close();

?>