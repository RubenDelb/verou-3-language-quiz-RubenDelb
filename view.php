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
	<!-- TODO: add a form for the user to play the game -->
	<form action="" method="post">
		<button name="newWordBtn" id="newWordBtn">NEW WORD</button><br>
		<p>Can you translate this word? : <?= $game->randomWord(); ?> </p>
		<label for="guessedAnswer">Enter your answer here: </label>
		<input id="guessedAnswer" name="guessedAnswer" type="text"><br>
		<input type="hidden" name="randomWordCheck" value="<?=$game->randomWord?>">
		<input type="submit">
		
	</form>
	<?php pre($_POST); ?>
</body>
</html>