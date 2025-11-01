<?php

$num = (double) 55;
echo $num."<br>";
var_dump($num);

?>
<hr>
<?php

$num = (int) "today is Saturday";
echo $num."<br>";
echo gettype($num);


?>
<hr>
<?php

$num = (float) "today is Saturday";
echo $num."<br>";
echo gettype($num);


?>
<hr>
<?php

$num = (bool) "today is Saturday";
echo $num."<br>";
echo gettype($num);


?>
<hr>
<?php

$num = (array) "Hello";
echo $num[0]."<br>";
//echo $num[1]."<br>";
echo gettype($num);


?>