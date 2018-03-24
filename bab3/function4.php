<?php

function setTinggi($TinggiMin = 50)
{
	echo "Tingginya adalah: $TinggiMin <br>";
}

setTinggi(350);
setTinggi(); //will occupied by default value
setTinggi(135);
setTinggi(80);
?>
