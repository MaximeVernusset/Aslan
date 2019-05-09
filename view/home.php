<!DOCTYPE html>
<html lang="fr">

	<head>
		<title>Aslan</title>
		<meta name="author" content="Maxime Vernusset"/>
		<meta name="language" content="fr"/>
		<meta name="copyright" content="Maxime Vernusset"/>
		<meta name="robots" content="index,follow"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta charset="utf-8"/>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link rel="stylesheet" href="./public/css/aslan.css"/>
		<link rel="stylesheet" href="./public/css/home.css"/>
		<link rel="icon" type="image/png" href="public/img/aslan.png"/>
	</head>

	<body>

		User = <?= isset($_SESSION[USER]) ? $_SESSION[USER]->toString() : PHP_EOL; ?>
		<br/>
		<?= $functionalities; ?>
		
		<a href="./?<?=PARAMETER_ACTION?>=<?=ACTION_LOGOUT?>">D&eacute;connection</a>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</body>
</html>