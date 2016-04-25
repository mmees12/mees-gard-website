<!DOCTYPE html>

<html>

	<head>
		<title> The Family Cookbook </title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
		
	<body>
		<div class = "container">
			<h2>Find your favorite Recipe</h2>
			<form role=form">
			<div class="form-group">
			<label for ="search">Search: </label>
			<input type="text" class="form-control" id="search">m>
			</div>
			
			</form>
		</div>
		
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
		<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
    </ul>	
			
			
		</form>
	</body>
</html>
