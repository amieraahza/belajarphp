<?php
session_start();

if(isset($_SESSION['kunjungan']))
	$_SESSION['kunjungan'] =$_SESSION['kunjungan']+1;
else
	$_SESSION['kunjungan']=1;
	echo 'ini kunjungan ke' . $_SESSION['kunjungan'];
?>

<br><a href = 'session_destroy.php'>Keluar lawatan</a>