<?php
function namaKeluarga($nama_keluarga, $tahun)
{
	echo "$nama_keluarga Sudirman. Lahir pada tahun $tahun <br>";
}

//callfunction 
/*namaKeluarga("Joanna", "1983"); 
namaKeluarga("Andi", "1975");
namaKeluarga("Soni", "1978");*/



$namaSendiri = array(
	0 => array('nama' => 'Joanna', 'tahun' => 1983),
	1 => array('nama' => 'Andi', 'tahun' => 1975),
	2 => array('nama' => 'Soni', 'tahun' => 1978)
	);

echo '<pre>'; print_r($namaSendiri);


foreach ($namaSendiri as $key) 
{
		//echo $key['tahun'] . '<br>';
	$nama = $key['nama'];
	$tahun = $key['tahun'];
	namaKeluarga($nama, $tahun);	
}
?>