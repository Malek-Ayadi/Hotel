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
        <link href="ajouterPersonnelCss.css" rel="stylesheet">
        <link href="./css/background.css" rel="stylesheet">
		<title>modifier Personnel</title>
	</head>
	<body>
        <?php
    include ("navigationAdmin.php");   

    ?>
    <div class="container col-12">
    <div  style="margin-right:700px; margin-top: 100px;margin-bottom: 100px; padding-left:50px; padding-right: 50px " >
		<form action="traitementModifierPersonnel.php?login=<?php echo $_GET['login']?>" method="POST">
            <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom" value="<?php echo $_GET['nom'] ?>" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Prénom" name="prenom" id="prenom" value="<?php echo $_GET['prenom'] ?>" required>
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Login" name="login" id="login" value="<?php echo $_GET['login'] ?>" required>
            <input type="password" class="form-control" placeholder="Ancien Mot de passe" name="ancienPassword" required id="password">
            <input type="password" class="form-control" placeholder="Mot de passe" name="password" required id="password">
			<input type="mail" class="form-control" placeholder="E-mail" name="mail" id="mail" value="<?php echo $_GET['mail'] ?>" required>
            <div class="form-check">
			      <input type="checkbox" class="form-check-input" name="admin" id="admin" <?php if ($_GET['admin']) echo 'checked' ?> >
                  <label for="admin" class="form-check-label">admin</label>
            </div>
            <button type="submit" class="btn btn-primary btn" value="modifier">Modifier</button>
            <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button><br>
            <?php
            if  (isset($_GET['err']))
            echo 'verifier mdp';
    ?>
		</form>
    </div>
</div>

    <?php
    include ("piedPage.php");
    ?>

	</body>
	</html>