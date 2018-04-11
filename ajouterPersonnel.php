<?php
	include 'verificationAuthentification.php';

?>
<!DOCTYPE html>
	<html>
	<head>
		<title>ajouter personnel</title>
	</head>
	<body>
		<form action="traitementAjouterPersonnel.php" method="POST">
			<p><label for="login">login</label><input type="text" name="login" id="login"></p>
			<p><label for="password">password</label><input type="password" name="password" id="password"></p>
			<p><label for="nom">nom</label><input type="text" name="nom" id="nom"></p>
			<p><label for="prenom">prenom</label><input type="text" name="prenom" id="prenom"></p>
			<p><label for="mail">mail</label><input type="text" name="mail" id="mail"></p>
			<p><label for="admin">admin</label><input type="checkbox" name="admin" id="admin"></p>
			<input type="submit" value="ajouter">
		</form>


	</body>
	</html>