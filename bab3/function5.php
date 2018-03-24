<?php

function jumlahkan($x, $y)
{
	$z = $x + $y;
	return $z;
}

echo "5 + 11 = " . jumlahkan(5, 11) . "<br>";
echo "7 + 15 = " . jumlahkan(7, 15) . "<br>";
echo "2 + 4 = " . jumlahkan(2, 4);

$total = array(
	0 => array('x' => '5', 'y' => 11),
	1 => array('x' => '7', 'y' => 15),
	2 => array('x' => '2', 'y' => 4)
	);

foreach ($total as $key) 
{
		//echo $key['tahun'] . '<br>';
	$x = $key['x'];
	$y = $key['y'];
	jumlahkan($x, $y);	
}
?>