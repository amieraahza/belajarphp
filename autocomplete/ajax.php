<?php
//Including Database configuration file.
include "db.php";
//Getting value of "search" variable from "script.js".
//echo "<pre>"; print_r($_POST); 
//echo "</pre>";

/*
Array
(
    [search] => r
)
*/

if (isset($_POST["search"])) 
{
	//Search box value assigning to $Name variable.
    $Name = $_POST["search"];
	$Name = (isset($Name)) ? NULL : $Name;
	//Search query.
   $Query = "SELECT name FROM search WHERE name LIKE '%" . $Name . "%' LIMIT 5";

	//Query execution
   $ExecQuery = MySQLi_query($con, $Query);

	//Creating unordered list to display result.
	echo '<ul>';

   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) 
{?><li onclick='fill("<?php echo $Result['Name'] ?>")'>
	<a><?php echo $Result['Name']; ?></a>
</li><?php

}

}
else
{
	echo '<li><a>Not found</a></li>';
}
echo '</ul>';
