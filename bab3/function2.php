<?php
function namaKeluarga($nama_keluarga)
{
	echo "$nama_keluarga Sudirman <br>";
}

//callfunction
/*namaKeluarga("Jani"); 
namaKeluarga("Joan"); 
namaKeluarga("Stella");
namaKeluarga("Arif");
namaKeluarga("Andi");
*/

$namaSendiri = array('Jani', 'Joan', 'Stella', 'Arif', 'Andi');

foreach ($namaSendiri as $key => $value) 
{
	namaKeluarga($value);	# code...
}

?>