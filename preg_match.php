<?php $line = "vim is the greatest word processor ever created! Oh vim, how love thee!" ;

//echo page_match("/\bVim\b/i",$line, $match) 

//if (preg_match("/\bVim\b/i", $line, $match)) print "Match Found!"; 

if (preg_match_all("/\bVim\b/i", $line, $match)) 
    
    echo "Match Found!"."<br>";
    print "Match Found!"."<br>";

 print_r($match) ; 
?>

<hr>

<?php 

$foods = array ("pasta","steak","fish","potatoes");
$Food = preg_grep("/^p/", $foods);

print_r($Food);

?>

<hr>

<?php 

$delimitedText = "Jason+++++Gilmore++++++++++Columbus+++++OH";
$fields = preg_split("/\++/", $delimitedText);

foreach($fields as $field)

    echo $field;

?>