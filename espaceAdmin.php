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
		<div class="container" style="margin-bottom: 118px">
          <table class="table ">
			<tr>
				<td><?php include'gererProduit.php' ?></td>
				<td><?php include'gererPersonnel.php' ?></td>
				<td><?php //include'gererProduit.php' ?></td>
			</tr>
		  </table>
        </div>
    <?php
    include ('piedPage.php');
    ?>
	</body>
	</html>
