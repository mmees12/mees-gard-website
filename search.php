<!DOCTYPE html>

<html>

	<head>
		<title> The Family Cookbook </title>
	</head>
		
	<body>
	<body style = "text-align: center;">
		<form action = "recipe_search.php" method = "get">
		Recipe Name: <input name = "recipe" type = "text />
		<br/>
		Search by: <select name = "by">
			<option value = ""></option> 
			<option value="by Recipe Name">by Recipe Name</option>
			<option value="by Family Origin">by Family Origin</option>
			<option value="by Style">by Style</option>
			</select>
		</form>
	</body>
</html>
