<html>
<head>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>

function browseName(str)
{
	if (str.length == 0) 
	{
		document.getElementById("txtPetunjuk") .innerHTML = "";
		return;
	}
	var xmlhttp = XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			document.getElementById("txtPetunjuk") .innerHTML = xmlhttp.responnseText;
		}
	}
	xmlhttp.open("GET", "petunjuk2.php?q="+str, true);
	xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Masukkan Nama: </b></p>
<form method="GET">
	Nama Awal: <input type="text" name="nama" onkeyup="browseName(this.value)">
</form>
<p>Saranan: <span id="txtPetunjuk"></span></p>

</body>
</html>