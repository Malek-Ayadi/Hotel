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

<!DOCTYPE html>
<html >

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/75A700D5-821F-2D47-8E6C-6718CB7CD0E8/main.js" charset="UTF-8"></script></head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="main.php">ici le nom de l'hotel</a>
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>-->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservation.php">Réservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="verifierDisponibiliteDateRes.php">Enregistrement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Consommation.php">Consommation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Facturation.php">Facturation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checkOut.php">Check-out</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="espaceAdmin" href="espaceAdmin.php">Espace Admin</a>
                </li>

            </ul>
        </div>
        <div class="col-1" style="padding-left: 77px;" >
            <a href="deconnexion.php" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Déconnecter</a>
        </div>
    </div>

</nav>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Check Out</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container col-6">
    <div class="border border-primary" style="margin:200px; padding:50px">
<form method="post" action="traitementCheckOut.php">
    <label for="cin">Cin</label> <input type="number" name="cin" class="form-control form-control-lg">
    <input type="submit" name="entrer" value="entrer" class="btn btn-primary">
</form>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

</head>

<body>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html></body>

</html>

