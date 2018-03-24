<html>
<body>
<h2>Tanggal dan Masa dengan PHP</h2>

<?php //http://php.net/manual/en/function.date.php

date_default_timezone_set('asia/kuala_lumpur');

echo "sekarang tarikh " . date("d/m/Y") . "<br>";
echo "sekarang jam " . date("H:i:sa");
?>
</br>
&copy; 2010-<?php echo date ("Y")?>

</body>
</html>