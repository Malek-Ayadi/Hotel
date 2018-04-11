<?php
	include 'verificationAuthentification.php';

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>modifier Personnel</title>
	</head>
	<body>
		<form action="traitementModifierPersonnel.php?login=<?php echo $_GET['login']?>" method="POST">
			<p><label for="login">login</label><input type="text" name="login" id="login" required></p>
			<p><label for="password">password</label><input type="password" name="password" required id="password"></p>
			<p><label for="nom">nom</label><input type="text" name="nom" id="nom" required></p>
			<p><label for="prenom">prenom</label><input type="text" name="prenom" id="prenom" required></p>
			<p><label for="mail">mail</label><input type="mail" name="mail" id="mail" required></p>
			<p><label for="admin">admin</label><input type="checkbox" name="admin" id="admin" <?php  ?> ></p>
			<input type="submit" value="modifier">
			<input type="button" value="retour" id="retour">
		</form>

		<script src="buttonRetourPersonnel.js"></script>

	</body>
	</html>