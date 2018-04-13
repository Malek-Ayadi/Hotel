<?php
	include 'verificationAuthentification.php';

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
		<title>modifier Personnel</title>
	</head>
	<body>
    <div class="container col-3">
		<form action="traitementModifierPersonnel.php?id=<?php echo $_GET['id']?>" method="POST">
            
            <div class="col">
              <input type="number" class="form-control" placeholder="Id" name="id" id="id" value="<?php echo $_GET['id'] ?>" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Type" name="type" id="type" value="<?php echo $_GET['type'] ?>" required>
            </div>
            

            <button type="submit" class="btn btn-primary btn" value="modifier">Modifier</button>
            <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button>
    </div>

		<script src="buttonRetourPersonnel.js"></script>

	</body>
	</html>