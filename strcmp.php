<?php 

$paswd = "lkjhgfdsa";
$paswd2 = "lkjhgfdsa2";

//echo strcmp($paswd, $paswd2);

if(strcmp($paswd, $paswd2) == -1) {
    echo "password do not Match";
}else{
    echo "password Match !";
}

?>