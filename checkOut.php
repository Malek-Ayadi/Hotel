<?php
if (isset($_GET['err1']))
{
    echo("<p id='er1'>Erreur CIN</p>");

}
if (isset($_GET['err2']))
{
    echo("<p id='er2'>Reservation sous ce CIN est introuvable </p>");

}
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', ''); //changer le mdp en fonction du serveur local de ton pc
}
catch (PDOException $e)
{
    die('erreur : '.$e->getMessage());
}
?>
 <?php include 'verificationAuthentification.php';
    include 'choixNavigation.php'; ?>
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="./css/background.css" rel="stylesheet">
    <title>Check Out</title>
</head>
<body>
    

<div class="container col-12">
    <div  style="margin-right:700px; margin-top: 200px;margin-bottom: 200px; padding-left:50px; padding-right: 50px " >
<form method="post" action="traitementCheckOut.php">
    <label for="cin">Cin</label> <input type="number" name="cin" class="form-control form-control-lg">
    <input type="submit" name="entrer" value="entrer" class="btn btn-primary">
</form>
    </div>
</div>
</body>
<?php include 'piedPage.php'; ?>
</html>

