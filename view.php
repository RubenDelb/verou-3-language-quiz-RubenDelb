<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
	<!-- Add a form for the user to play the game -->
	<form action="" method="post">
		<?php if(!isset($_SESSION['name'])) {
		echo '<label for="name">Your username: </label>
		<input type="text" id="name" name="name">
		<input type="submit" id="submitNameBtn" name="submitNameBtn">';
		} else {
			echo '<h3>Player: '.$newPlayer->name.'</h3>'.'Your Score: '.$newPlayer->score.'<br>Mistakes: '.$_SESSION['mistakes'];
		}
		?>
		
	</form>
	<?php if(isset($_SESSION['message'])) {echo '<h3>'.$_SESSION['message'].'</h3>';} ?>
	<form action="" method="post">
		<p>Can you translate this word? : <b><?= $game->randomWord(); ?></b> </p>
		<label for="guessedAnswer">Enter your answer here: </label>
		<input id="guessedAnswer" name="guessedAnswer" type="text"><br>
		<input type="hidden" name="randomWordCheck" value="<?=$game->randomWord?>">
		<input type="submit">
	</form>
</body>
</html>