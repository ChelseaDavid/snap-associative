<?php
$nameAge = array ( "Matt" => "31", " Jesse" => "48", " Chelsea" => "29", " Kayla " => "18");
foreach($nameAge as $x => $x_value) {
	echo $x;
}

$nameAge = array_filter($nameAge);
$average = array_sum($nameAge)/count($nameAge);
echo $average;
?>

