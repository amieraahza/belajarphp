<?php

$mobile = array("Isuzu Panther", "Zebra Espass", "Toyota Fortuner");
echo '<pre>'; print_r($mobile);
echo '</pre>';
	sort($mobile);

	$panjangArray = count($mobile);

	for ($x = 0; $x < $panjangArray; $x++)
	{
		echo $mobile [$x];
		echo "<br>";
	}

	?>