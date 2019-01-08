<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}

	require('inc/helpers.php');
	require('inc/app.php');
 ?>
<body>
	<div class="container mx-auto mt-5 mb-5">

		<!-- header -->
		<div class="col-8 mx-auto border-lg-dark bg-white">
			<div class="row badge-dark pt-1 pb-1">
				<div class="text-left col-6">
					<?= 'Witaj '.$_SESSION['user'].'!'?>
				</div>
				<div class="text-right col-6">
					<a href="logout.php">
						<div class="btn btn-sm btn-primary">
							Wyloguj się!
						</div>
					</a>
				</div>
			</div>

		<!-- materials -->
		<div class="row pb-1 border-bottom border-dark">
			<div class="col-4 text-center">Drewno:
				<div class="badge badge-secondary text-shadow">
					 <?= $_SESSION['drewno'] ?>
				</div>
			</div>
			<div class="col-4 text-center">Kamień:
				<div class="badge badge-secondary text-shadow">
					 <?= $_SESSION['kamien'] ?>
				</div>
			</div>
			<div class="col-4 text-center">Zboże:
				<div class="badge badge-secondary text-shadow">
					 <?= $_SESSION['zboze'] ?>
				</div>
			</div>
		</div>

		<!-- fake image -->
		<div class="col-12 p-1 border-bottom border-dark">
			<img src="images/img.jpg" alt=" No image found" class="photo">
			<p><small>Image copied from Heros 3</small></p>
		</div>

		<!-- description -->
		<div class="border-bottom border-dark text-justify">
			<div class="col-10 mx-auto pt-3 pb-3 lora">
				<p>Przykładowy projekt wykorzystujacy baze danych MySql, Bootsrapa 4 oraz super zmienne globalne: $_SESSION i $_POST.</p>

				<p>Projekt został zabezpieczony przed nieautoryzowanym wejściem na strone z użyciem bezpośredniego linka. Posiada 20 minutowa sesje zabezpieczajaca przed koniecznoscia kazdorazowego logowania przy przechodzeniu pomiedzy stronami.</p>	
			</div>
		</div>

		<!-- footer -->
		<div>
			<p><b>E-mail:</b> <?= $_SESSION['email']?> <br>
			<b>Data wygaśnięcia premium: </b><?= $_SESSION['dnipremium']?> <br>
			<b>Data i czas serwera: </b> <?= now()?> <br>
			<b>Premium <?= premiumIsActive($_SESSION['dnipremium'])?>aktywne od: </b>
			   <?= getPremiumDays($_SESSION['dnipremium']) ?> </p>
		</div>
	</div>
</div>

<?php require('inc/footer.php') ?>