<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przeglądarkowa</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>


<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

	
?>


<body>
<div class="h-12"></div>

<div class="container-sm2">
	<div class="col-12 mx-auto">
		<div id="z_text">Logowanie:</div>
	</div>

	<div class="col-12">
		<i>Tylko martwi ujrzeli koniec wojny - Platon</i>
	</div>

	<form action="zaloguj.php" method="post">
		
		<input type="text"
		name="login"
		placeholder="Login" 
		onfocus="this.placeholder=''" 
		onblur="this.placeholder='Login'">

		<input type="password"
		placeholder="Hasło"
		name="haslo"
		onfocus="this.placeholder=''" 
		onblur="this.placeholder='Password'">

		<input type="submit" value="Zaloguj się">
	</form>
</div>

<div class="container-sm2">
	<button class="btn btn-dark btn-sm" name="qwerty">adam</button>
	<button class="btn btn-dark btn-sm" name="asdfg">marek</button>
	<button class="btn btn-dark btn-sm" name="zxcvb">anna</button>
	<button class="btn btn-dark btn-sm" name="asdfg">andrzej</button>
	<button class="btn btn-dark btn-sm" name="yuiop">justyna</button>
	<button class="btn btn-dark btn-sm" name="hjkkl">kasia</button>
</div>

<?php
	if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
?>

<script>
	$(document).ready(function() {

		$("button").click(function(){
			$login = $(this).text();	
			$pass = $(this).attr("name");
			console.log($pass);
		  $("input[name=login]").val($login);
		  $("input[name=password]").val($pass);
		});

	});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>