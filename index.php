<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php calculator</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="bg-success">
	<div class="card col-md-6 mt-5 mx-auto">
		<h4>Php calculator</h4>
		<form class="form-group">
			<input type="text" name="number1" placeholder="Number" class="form-control">
			<input type="text" name="number2" placeholder="Number" class="form-control">
			<select name="oparetor" >
				<option>None</option>
				<option>Add</option>
				<option>Subcrite</option>
				<option>Multiply</option>
				<option>Dievide</option>
			</select>
			<br>	
			<button type="submit" value="submit" name="submit" class="btn btn-primary float-right">Calculate</button>
		</form>
		<p>The Ans is:</p>
		<?php 
			if (isset($_GET['submit'])) {
				$ruselt1 =$_GET['number1'];
				$ruselt2 =$_GET['number2'];
				$oparetor =$_GET['oparetor'];
				switch ($oparetor) {
					case "None":
						echo "Select any method";
						break;
				case "Add":
						echo $ruselt1 + $ruselt2;
						break;

				case "Subcrite":
						echo $ruselt1 - $ruselt2;
						break;
				case "Multiply":
						echo $ruselt1 * $ruselt2;
						break;

			  	case "Dievide":
						echo $ruselt1 / $ruselt2;
						break;
				
				}
			}
		 ?>
	</div>
</body>
</html>