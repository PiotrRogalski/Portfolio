<?php 
	require('inc\validation_registration.php'); 
	require('inc/helpers.php');
	require('inc/app.php');
?>

<body>

<div class="container row mx-center pt-5 text-center">
	<div class="col-12 mx-center">
		<h1>Formularz rejestracji</h1>
	</div>
	<div class="offset-1"></div>
	<div class=" mx-center col-5 text-center">
	<form method = "post" >
		nickname:<br /> 
		<input type="text" value = "<?php
			if (isset($_POST['fr_nick'])){
				echo  $_POST['fr_nick'];
				unset($_POST['fr_nick']);
			}?>" name= "nick"> <br/>

		<?php
			if (isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
		?>

		
		E-mail:<br /> <input type="text" value = "<?php
			if (isset($_POST['fr_email'])){
				echo  $_POST['fr_email'];
				unset($_POST['fr_email']);
			}?>"name= "email"> <br/> 


		<?php
			if (isset($_SESSION['e_mail']))
			{
				echo '<div class="error">'.$_SESSION['e_mail'].'</div>';
				unset($_SESSION['e_mail']);
			}
		?>

		Twoje hasło:<br /> <input type="password" name= "haslo1"> <br/> 

		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
		?>

		Powtórz hasło:<br /> <input type="password" name= "haslo2"> <br/>

		<label>
			<input type="checkbox" name="regulamin" <?php
			if ( isset($_POST['fr_regulamin']) )
				{
					echo 'checked';
					unset($_POST['fr_regulamin']);
				} 
			?>
			>Akceptuję regulamin
		</label>

		<?php
			if (isset($_SESSION['e_regulamin']))
			{
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);
			}
		?>

		<div class="g-recaptcha" data-sitekey="6LfBonYUAAAAANXo8SCyot0vm-InzhuJgPQKuOUk"></div>

		<?php
			if (isset($_SESSION['e_bot']))
			{
				echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
				unset($_SESSION['e_bot']);
			}
		?>

		<br />

		<input type="submit" value="Zarejestruj się">
	</form>
	</div>
	<div class="col-6"></div>

</div>
<?php
	if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
?>

<script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>


</body>
</html>