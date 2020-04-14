<?php

$gameUrls = array(
	"https://studio.code.org/s/starwarsblocks/stage/1/puzzle/1",
	"https://flexboxfroggy.com/#fr",
	"https://cssgridgarden.com/#fr",
	"http://www.flexboxdefense.com/",
	"https://flukeout.github.io/",
	"https://www.algoblocs.fr/algoblocs.php?exercice=l",
	"https://studio.code.org/s/aquatic/stage/1/puzzle/1",
	"https://blockly.games/?lang=fr"
);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

</head>
<body>
<header>
<div id="occitanieButton">
    <a href="index.php">
        <img id="iconHead" src="images/occitanie.png" alt="Logo Occitanie">
    </a>
</div>
	<div class="buttonBox">
		<a class="buttons" href="index.php">
			<div class="buttonImage1">
				<img id="levelIcon" src="images/level.png" alt="Logo Niveaux">
			</div>
			MON NIVEAU
		</a>
		<a class="buttons" href="level.php">
			<div class="buttonImage2">
				<img id="allGames" src="images/jeux.png" alt="Logo Jeux">
			</div>
		</a>
</header>
