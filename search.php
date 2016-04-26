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
		<form action = "recipe_search.php" method = "get">
			<div class = "container">
				<h2>Find your favorite Recipe</h2>
			  	<form role=form">
					<div class="form-group">
					  <label for ="search">Search: </label>
					  <input type="text" class="form-control" name="search">
					</div>
					<div class="form-group">
						<label for="sel1">Select list:</label>
						<select class="form-control" name = "search_by">
						  <option>by Recipe Name</option>
						  <option>by Family Origin</option>
						  <option>by Style</option>
						</select>
					</div>
			
				</form>
			</div>
		</form>
	</body>
</html>
