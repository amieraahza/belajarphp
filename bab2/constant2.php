<?php
define("SAMBUTAN", "Selamat Datang ke status ku!");
$nilai = 'durian';

function tes($nilai = NULL)
{
	echo SAMBUTAN . ' buah ' . $nilai;	
}

tes();
?>