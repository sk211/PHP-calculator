<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php calculator</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-info">
	<div class="card col-md-6 mx-auto mt-5">
	<form method="GET" class="form-group mt-4">
		<input type="text" name="num1" placeholder="Number" class="form-control">
		<input type="text" name="num2" placeholder="Number" class="form-control">
		<select name="oparator" class="mt3" >
			<option>None</option>
			<option>Add</option>
			<option>subtract</option>
			<option>multiply</option>
			<option>Divide</option>
		</select>
		<br>
			<button type="submit" name="submit" value="submit" class="btn btn-info float-right">Calculate</button>
	</form>
	
	<p>The ans is:</p>

	<?php 
	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$oparator = $_GET['oparator'];
		switch ($oparator) {
			case "None":

				echo "You need to select a method";
				break;

				case "Add":
				echo $result1 + $result2;
				break;
				case "subtract":
				echo $result1 - $result2;
				break;

				case "multiply":
				echo $result1 * $result2;
				break;
				case "Divide":
				echo $result1 / $result2;
				break;
			
		}
	}
	 ?>
	</div>
	</body>
</html>