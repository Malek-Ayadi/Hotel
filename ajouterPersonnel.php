<?php
	include 'verificationAuthentification.php';
    include 'verificationAdmin.php';

?>
<!DOCTYPE html>
	<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
       <link href="./css/background.css" rel="stylesheet">
		<title>ajouter personnel</title>
	</head>
	<body>
        <?php
    include ("navigationAdmin.php");
    ?>
    <div class="container col-12">
    <div  style="margin-right:700px; margin-top: 160px;margin-bottom: 160px; padding-left:50px; padding-right: 50px " >
		<form action="traitementAjouterPersonnel.php" method="POST">
            <div class="form-row">
                <div class="col">
                     <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom">
                </div>
                <div class="col">
                     <input type="text" class="form-control" placeholder="Prénom" name="prenom" id="prenom">
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Login" name="login" id="login">
			<input type="password" class="form-control" placeholder="Mot de passe" name="password" id="password">
			<input type="text"  class="form-control" placeholder="E-mail" name="mail" id="mail">
            <div class="form-check">
			     <input type="checkbox" class="form-check-input" name="admin" id="admin">
                <label for="admin" class="form-check-label" >Admin</label>
            </div>
            <button type="submit" class="btn btn-primary btn" value="ajouter">Ajouter</button>
            <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button>
		</form>
    </div>
</div>    
<?php
    include ("piedPage.php");
    ?>

	</body>
	</html>