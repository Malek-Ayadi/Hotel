<?php
include 'verificationAuthentification.php';
if (($_SESSION['admin']==0))
    header("Location:index.php");
//echo $_SESSION['admin'];
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
        <link rel="shortcut icon" href="logo2.png">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">
    <link href="espaceAdmin2Css.css" rel="stylesheet">
    <title>Espace admin</title>
</head>
<bod  >
<?php
include ("navigationAdmin.php");
?>

    <div class="container" id="bcont"><h1>Espace Administrateur</h1>  </div>
    <div class="container" id="b1cont"><h3>Modifier,Ajouter ou Supprimer </h3> </div>
    <div class="container" id="b2cont" >
        <div class="row">
            <div class="col-1">
                <button type="button" id="enployee" class="btn ">Employé</button>
            </div>
            <div class="col-1">
                <button type="button" id="prod" class="btn ">Produit</button>
            </div>
            <div class="col-1">
                <button type="button" id="cham" class="btn ">Chambre</button>
            </div>
        </div>
    </div>
<div class="container col-1" id="cont" >

    <div id="id_div_1" style="display: none">
        <?php
        include('gererPersonnel.php');
        ?>
    </div>

    <div id="id_div_2" style="display: none;">
        <?php
        include ('gererProduit.php');
        ?>
    </div>

    <div id="id_div_3" style="display: none;">
        <?php
        include ('gererChambre.php');
        ?>
    </div>
</div>
<div style="position: relative;bottom: -20px;right: 0px;left: 0px;" ><?php include 'piedPage.php'; ?></div>
<script src="espaceAdminJs.js"></script>
</bod>
</html>