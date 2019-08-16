<?php 
//isset is check if certian variable/value has been set

	// if(isset($_GET['submit'])){
	// 	echo $_GET['email'];
	// 	echo $_GET['title'];
	// 	echo $_GET['ingredients'];
	// }

	// Using POST is more secure, because once submitted, you won't see your order in the URL
//htmlspecialchars is creating special characters like angle brackets will be render into HTML entities
	if(isset($_POST['submit'])){
		// echo htmlspecialchars($_POST['email']);
		// echo htmlspecialchars($_POST['title']);
		// echo htmlspecialchars($_POST['ingredients']);

		// check email
		if(empty($_POST['email'])){
			echo 'An email is required <br>';
		} else {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'Email must be a valid email address';
			}
		}

		// check title
		if(empty($_POST['title'])){
			echo 'A title is required <br>';
		} else {
			$title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				echo 'Title must be letters and spaces only';
			}
		}

		// check ingredients
		if(empty($_POST['ingredients'])){
			echo 'At least one ingredient is required <br>';
		} else {
			$ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				echo 'Ingredients must be a comma separated list';
			}
		}
	} // end of POST check
		
?>

<!DOCTYPE html>
<html lang="en">
	<?php include('templates/header.php') ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form action="add.php" method="POST" class="white">
			<label>Your Email:</label>
			<input type="text" name="email">
			<label>Pizza Title:</label>
			<input type="text" name="title">
			<label>Ingredients (comma separated):</label>
			<input type="text" name="ingredients">
			<div class="center">
				<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php') ?>
	

</html>