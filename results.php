<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./css/style.css" />
	<title>Guess the Number - Results</title>
</head>
<body>
	<h1>Guess the Number - Results</h1>
	<?php
		$randomNumber = rand(1, 6); // Generate a random number between 1-6
		$userGuess = $_POST["userGuess"]; // Get the user's guess from the form
		if (isset($_POST["submit"])) { // Check if the form has been submitted
			if ($userGuess == $randomNumber) { // If the user's guess matches the random number
				echo "<p>You guessed correctly!</p>";
			} else { // If the user's guess does not match the random number
				echo "<p>Sorry, the number was $randomNumber.</p>";
			}
			echo "<p>Guess a number between 1-6 and click the button to check if you're right:</p>";
			echo '<form action="results.php" method="post">
					<label for="userGuess">Guess:</label>
						<input type="number" step="1" min="1" max="6" name="userGuess"><br><br>
					<input type="submit" name="submit" value="Check">
				</form>'; // Display the form again so the user can guess again
		} else { // If the form has not been submitted yet
			echo "<p>Please guess a number between 1-6 and click the button to check if you're right.</p>";
			echo '<form action="results.php" method="post">
					<label for="userGuess">Guess:</label>
						<input type="number" step="1" min="1" max="6" name="userGuess"><br><br>
					<input type="submit" name="submit" value="Check">
				</form>'; // Display the form for the user to guess
		}
	?>
</body>
</html>
