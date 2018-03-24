<?php

$mobile = array("Agya", "Panther", "Zebra", "Carry", "Ayla", "Toyota", "BMW");
echo '<pre>'; print_r($mobile);
echo '</pre>';
	rsort($mobile);

	$panjangArray = count($mobile);

	for ($x = 0; $x < $panjangArray; $x++)
	{
		echo $mobile [$x];
		echo "<br>";
	}

	?>