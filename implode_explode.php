<?php
$arr = array('Hello','World!','Beautiful','Day!');
$arr2 = implode(" ",$arr);

echo $arr2;
?>

<hr>

<?php
$str = "Hello world. It's a beautiful day.";
$str2= (explode(" ",$str));

print_r($str2);
?>