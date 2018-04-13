<?php
	//include 'verificationAuthentification.php';
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
        <link href="css/full-width-pics.css" rel="stylesheet">
		<title>Enregistrement</title>
	</head>
	<body>
    <?php
    include ("navigationAdmin.php");
    ?>
		<div class="container col-1" style="margin-left: 1px">
            <button type="button" id="enployee" class="btn btn-outline-primary">Employé</button>
            <button style="padding-right: 21px" type="button" class="btn btn-outline-primary">Produit</button>
            <button type="button" class="btn btn-outline-primary">Chambre</button>
        </div>
    <?php
    include ('piedPage.php');
    ?>
    <script src="espaceAdminJs.js"></script>
	</body>
	</html>
