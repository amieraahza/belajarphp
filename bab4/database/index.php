<?php 
include 'tatarajah.php';

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
 {
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else
 {
 	echo "berjaya masuk database <br>";
 }

$sql = 'select * from biodata';
// Perform queries 
$result = mysqli_query($con, $sql);
$kira = mysqli_num_rows($result);
//echo $kira;

if ($kira > 0) 
{
	while($row = mysqli_fetch_assoc($result)) 
	{
		echo "Name: " . $row["namapenuh"]. "<br>";
	}
} else 
{
	echo "0 results";
}
//*/