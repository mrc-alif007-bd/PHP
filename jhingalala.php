<?php
$result = "";

if (isset($_POST['numbers'])) {
    // Get input and split it into an array
    $numbers = explode(" ", trim($_POST['numbers']));
    
    // Loop through each number
    foreach ($numbers as $num) {
        // Check if it's numeric before processing
        if (is_numeric($num)) {
            if ($num % 2 == 0) {
                $result .= "$num is even.<br>";
            } else {
                $result .= "$num is odd.<br>";
            }
        } else {
            $result .= "'$num' is not a valid number.<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>

<h2>Odd or Even Number Checker</h2>
<form method="post">
    Enter numbers (separated by spaces): <br>
    <input type="text" name="numbers" style="width:300px;" placeholder="e.g. 1 2 3 4 5" required>
    <br><br>
    <input type="submit" value="Check">
</form>

<?php
if (!empty($result)) {
    echo "<h3>Results:</h3>";
    echo $result;
}
?>

</body>
</html>
