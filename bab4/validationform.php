<html>
<head>
<style>
.error 
{
	color: #FF0000;
}
</style>
</head>
<body>

<?php
//tentukan variable n set nilai y kosong
$namaErr = $emailErr = $jenisKelaminErr = $websiteErr = "";
$nama = $email = $jenisKelamin = $komentar = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["nama"])){
		$namaErr = "nama wajib isi!";
	} else {
		$nama = test_input($_POST["nama"]);
	}

	if (empty($_POST["email"])){
		$emailErr = "email wajib isi!";
	} else {
		$email = test_input($_POST["email"]);
	}

	if (empty($_POST["website"])){
		$website = "";
	} else {
		$website = test_input($_POST["website"]);
	}

	if (empty($_POST["komentar"])){
		$komentar = "";
	} else {
		$komentar = test_input($_POST["komentar"]);
	}

	if (empty($_POST["jenisKelamin"])){
		$jenisKelamin  = "jenis kelamin";
	} else {
		$jenisKelamin = test_input($_POST["jenisKelamin"]);
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>Masukkan Data</h2>
<p><span class="error">* wajib isi.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	nama: <input type="text" name="nama">
	<span class="error">* <?php echo $namaErr; ?></span>
	<br></br>
	E-mail:  <input type="text" name="email">
	<span class="error">* <?php echo $emailErr; ?></span>
	<br></br>
	Website: <input type="text" name="website">
	<span class="error">* <?php echo $websiteErr; ?></span>
	<br></br>
	Komentar: <textarea name="komentar" row="5" col"40"></textarea>
	<br></br>
	Jenis Kelamin:
	<input type="radio" name="jenisKelamin" value="perempuan">Perempuan
	<input type="radio" name="jenisKelamin" value="lelaki">Lelaki
	<span class="error">* <?php echo $jenisKelaminErr; ?></span>
	<br></br>
	<input type="submit" name="submit" value="kirim data">
</form>

<?php
echo "<pre>"; print_r($_POST); echo "</pre>";
echo "<h2>Data dimasukkan: </h2>";
echo "nama: " . $nama;
echo "<br>";
echo "Email: " . $email;
echo "<br>";
echo "Website: " . $website;
echo "<br>";
echo "Komentar: " . $komentar;
echo "<br>";
echo "jenis Kelamin: " . $jenisKelamin;
?>

</body>
</html>