<?php

$umur = array("Aji" => "17", "Ali" => "37", "Juhari" => "13");  
echo '<pre>'; print_r($umur);
echo '</pre>';
	asort($umur);

	$panjangArray = count($umur);

	foreach ($umur as $x => $x_value)
	{
		echo "kunci adalah=" . $x . ", nilainya =" . $x_value;
		echo "<br>";
	}

	?>