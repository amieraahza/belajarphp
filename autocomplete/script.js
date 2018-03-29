/*Getting value from "ajax.php".*/
function fill(Value) 
{
	$('#search').val(Value); /*Assigning value to "search" div in "search.php" file.*/
	$('#display').hide(); /*Hiding "display" div in "search.php" file.*/
}

$(document).ready(function() 
{
	$("#search").keyup(function() /*On pressing a key on "Search box" in "search.php" file. This function will be called.*/
	{
		var name = $('#search').val(); /*Assigning search box value to javascript variable named as "name".*/
		if (name == "") 
		{ /*Validating, if "name" is empty.*/
			$("#display").html(""); /*Assigning empty value to "display" div in "search.php" file.*/
		}
		else /*If name is not empty.*/ 
		{
			$.ajax( /*AJAX is called.*/
			{
				type: "POST", /*AJAX type is "Post".*/
				url: "ajax.php", /*Data will be sent to "ajax.php".*/
				data: /*Data, that will be sent to "ajax.php".*/
				{
					search: name /*Assigning value of "name" into "search" variable.*/
				},
				success: function(html) 
				{ /*If result found, this funtion will be called.*/
					$("#display").html(html).show(); /*Assigning result to "display" div in "search.php" file.*/
				}
			});
		}
	});
});