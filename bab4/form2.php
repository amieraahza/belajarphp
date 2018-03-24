<html>
<body>
<pre>
<?php
//print_r($_POST);
/*
Array
(
    [jadual] => Array
        (
            [nama] => miera
            [email] => afgs@gmail.com
        )

)
*/
$jadual = 'biodata';
$nama = $_POST[$jadual]['nama'];
$email = $_POST[$jadual]['email'];

$jadual = 'sijil';
$upsr = $_POST[$jadual]['upsr'];
$pmr = $_POST[$jadual]['pmr'];
$spm = $_POST[$jadual]['spm'];
?>
</pre>
<h2> Terima kasih</h2>
Nama anda: <?php echo $nama ?>
<br>
E-mail anda: <?php echo $email ?>
<br>
Sijil UPSR anda: <?php echo $upsr ?>
<br>
Sijil PMR anda: <?php echo $pmr?>
<br>
Sijil SPM anda: <?php echo $spm ?>


</body>
</html>