<?php
	session_start();

	if (   isset($_POST['email'])   )
	{
		//udaana walidacja
		$wszystko_ok = true;

		//spr nickname
		$nick = $_POST['nick'];

		//spr dł nicka
		if (   (strlen($nick)<3) || (strlen($nick)>20)   )
		{
			$wszystko_ok = false;
			$_SESSION['e_nick']='Nick musi posiadać od 3 do 20 znaków';
		}

		if (   ctype_alnum($nick) == false   )
		{
			$wszystko_ok = false;
			$_SESSION['e_nick'] = "Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}

		//spr popr. adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

		if (   (filter_var($emailB, FILTER_VALIDATE_EMAIL)==FALSE) || ($emailB!=$email)  )
		{
			$wszystko_ok = false;
			$_SESSION['e_mail'] = "Podaj poprawny email"; 
		}

		//spr popr hasla
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];

		$h1 = strlen($haslo1);
		if (   ($h1<8) || ($h1>20)   )
		{
			$wszystko_ok = false;
			$_SESSION['e_haslo'] = "Hasło musi posiadać od 8 do 20 znaków";
		}

		if ($haslo1!=$haslo2)
		{
			$wszystko_ok = false;
			$_SESSION['e_haslo'] = "Podane hasła nie są identyczne";
		}

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

		//czy zaakceptowano regulamin
		if (   !isset($_POST['regulamin'])   )
		{
			$wszystko_ok = false;
			$_SESSION['e_regulamin'] = "Musisz zaakceptować regulamin";
		}

		//bot or not recaptcha
		$sekret = "6LfBonYUAAAAAMwc2pYAUgcYOYQBbYP0jPbRP_ES";

		$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/verify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);

		$odpowiedz = json_decode($sprawdz);

		if ($odpowiedz->success == false)
		{
			// $wszystko_ok == false;
			$_SESSION['e_bot'] = "Potwierdź, że nie jesteś botem";
		}

		//zapamietanie wypelnienia formularza
		$_POST['fr_nick'] = $nick;
		$_POST['fr_email'] = $email;
		if (  isset($_POST['regulamin']) )$_POST['fr_regulamin'] = true;




		require_once 'connect.php';
		mysqli_report(MYSQLI_REPORT_STRICT);
		try
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else//sukces polaczenia
			{
				//czy email juz istnieje
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");

				if (!$rezultat) throw new Exception($polaczenie->error);

				$ile_takich_maili = $rezultat->num_rows;
				if ($ile_takich_maili>0)
				{
					$wszystko_ok = false;
					$_SESSION['e_mail'] = "Istnieje już konto przypisane do tego adresu email";
				}

				//Czy nick jest juz zarezerwowany
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");

				if (!$rezultat) throw new Exception($polaczenie->error);

				$ile_takich_nickow = $rezultat->num_rows;
				if ($ile_takich_nickow>0)
				{
					$wszystko_ok = false;
					$_SESSION['e_nick'] = "Istnieje już gracz o takim nicku, wybierz inny";
				}

				if (   $wszystko_ok == true   )
				{
					//wszystko sie zgadza dodajemy gracza
					if (  $polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick','$haslo_hash','$email', 100, 100, 100, now() + INTERVAL 14 DAY)")  )//now zwraca bierzaca date id czas
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: witamy.php');
					}
					else//nie udalo sie dodac gracza do bazy
					{
						 throw new Exception($polaczenie->error);
					}
				}


				$polaczenie->close();//zamkniecie polaczenia
			}

		}
		catch(Exception $e)
		{
			echo '<span style = "color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie. </span>';
			echo '<br/> Informacja developerska: '.$e;
		}

	}
?>


