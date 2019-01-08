<?php

	session_start();
	
	if (  !isset($_SESSION['udanarejestracja'])  )
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}


//usuwanie zmiennych pamietajacych wypelniony formularz rejestracji
	if ( isset($_POST['fr_nick']) )unset($_POST['fr_nick']);
	if ( isset($_POST['fr_email']) )unset($_POST['fr_email']);
	if ( isset($_POST['fr_regulamin']) )unset($_POST['fr_regulamin']);

//usuwanie zminneych pamietajacych bledy przy wypelnianiu formularza rejestracji
	if ( isset($_POST['e_nick']) )unset($_POST['e_nick']);
	if ( isset($_POST['e_mail']) )unset($_POST['e_mail']);
	if ( isset($_POST['e_haslo']) )unset($_POST['e_haslo']);
	if ( isset($_POST['e_regulamin']) )unset($_POST['e_regulamin']);
	if ( isset($_POST['e_bot']) )unset($_POST['e_bot']);

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przeglądarkowa</title>
</head>

<body>

	Dziękujemy za udaną rejestracje - możesz już zalogować się na swoje konto

	<a href="index.php">Zaloguj się na swoje konto! :)</a><br /><br />
	

</body>
</html>