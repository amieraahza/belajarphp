<?php
session_start();
//keep data session
$jadual = 'biodata';
$_SESSION[$jadual]['views']=2;
?>

<html>
<body>
<pre>
<?php
print_r($_SESSION);
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
$views = $_SESSION[$jadual]['views'];
?>
</pre>
	<?php

	//take data session
	echo "kunjungan =" . $views;
	?>
</html>
</body>