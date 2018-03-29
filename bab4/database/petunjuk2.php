<?php

//fill array with name
$a[] = "Arif";
$a[] = "Budi";
$a[] = "Chandra";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gogon";
$a[] = "Hasril";
$a[] = "Inge";
$a[] = "Joni";
$a[] = "Kristin";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Orizo";
$a[] = "Parto";
$a[] = "Amanda";
$a[] = "Rahma";
$a[] = "Cecil";
$a[] = "Doris";
$a[] = "Evans";
$a[] = "Evita";
$a[] = "Sabrina";
$a[] = "Toyib";
$a[] = "Umay";
$a[] = "Veri";
$a[] = "Argon";
$a[] = "Eliza";
$a[] = "Yasmin";
$a[] = "Warrior";
$a[] = "Ahmad";

//ambil parameter q from URL
//echo '<pre>'; print_r($_REQUEST["q"]); echo '</pre>';
$q = $_GET['q'];
$petunjuk = "";

//ambil semua ptunjuk dari array
if ($q !== "") 
{
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($a as $nama) 
	{
		if (stristr($q, substr($nama, 0, $len))) 
		{
			$petunjuk = $nama;
		}else 
		{
			$petunjuk .= ", $nama";
		}
	}
}
//keluarkan kalimat bila x de yg betul
echo $petunjuk ===""? "maaf tiada saranan" : $petunjuk;