<!DOCTYPE html>
<html>
<head>
   <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Fahrenheit to celsius, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For favicon on this page-->
     <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
	<title>Guess the Number</title>
</head>
<body>
	<h1>Guess the Number</h1>
  <!-- textfield for user to enter number-->
	<p>Guess a number between 1-6:</p>
	<form action="results.php" method="post">
		<label for="userGuess">Guess:</label>
    <!-- only accept numbers 1-6-->
		<input type="number" step="1" min="1" max="6" name="userGuess"><br><br>
		<input type="submit" name="submit" value="Check">
	</form>
</body>
</html>
