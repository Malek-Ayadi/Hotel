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
		<title>Modifier Personnel</title>
	</head>
	<body>
    <div class="container col-3">
		<form action="traitementModifierChambre.php?id=<?php echo $_GET['id']?>" method="POST">
            
            <div class="col">
              <input type="number" class="form-control" readonly placeholder="Id" name="id_chamb" id="id" value="<?php echo $_GET['id'] ?>" required>
            </div>
            <div class="col">
             <p>
                <label for="type">Type de la chambre: </label>
                <select size="1" name="type" id="type" required class="form-control form-control-lg"> 
                    <option value="simple">Simple</option> 
                    <option value="double">Double</option> 
                    <option value="triple">Triple</option>
                </select>
            </p>
            </div>
            

            <button type="submit" class="btn btn-primary btn" value="modifier">Modifier</button>
            <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button>
    </div>

		<script src="buttonRetourPersonnel.js"></script>

	</body>
	</html>