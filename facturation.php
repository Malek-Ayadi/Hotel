<?php
    include 'verificationAuthentification.php';
    include 'choixNavigation.php';
    
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
        $bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());

    }
    if (!(isset($_GET['ok'])))
    $req=$bdd->query('SELECT * FROM projet.client');
    else
        {
            $execution='%'.$_POST['recherche'].'%';
            $req=$bdd->prepare('SELECT * FROM projet.client where `client`.`nom` like ?');
            $req->execute(array($execution));
        }

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="./css/background.css" rel="stylesheet"> 

    <title>Facturation</title>
</head>

<?php/*
    if  (isset($_GET['ok']))
    include 'traitementFacturation.php';
    else */
?>

<body>
	<div class="container col-12">
    <div  style="margin-right:700px; margin-top: 200px;margin-bottom: 200px; padding-left:50px; padding-right: 50px " >
<form method="post" action="facturation.php?ok=1">
    <label for="cin">Cin</label> <input type="number" name="cin" class="form-control form-control-lg">
    <input type="submit" name="entrer" value="entrer"  class="btn btn-primary">
</form>
</div>
</div>

    <form method="post" action="Facturation.php?ok=1">
        <input type="text" name="recherche">
        <input type="submit" name="rechercher">

    </form>


    <table>
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>prenom</td>
            <td>ddn</td>
            <td>mail</td>
            <td>adress</td>
            <td>cin</td>
            <td>tel</td>
            <td></td>
        </tr>
        <?php while ($recherche=$req->fetch())
        {?>
        <tr>
            <td><?php echo $recherche['id_clt']?></td>
            <td><?php echo $recherche['nom']?></td>
            <td><?php echo $recherche['prenom']?></td>
            <td><?php echo $recherche['ddn']?></td>
            <td><?php echo $recherche['mail']?></td>
            <td><?php echo $recherche['adresse']?></td>
            <td><?php echo $recherche['cin']?></td>
            <td><?php echo $recherche['tel']?></td>
            <td><a href="traitementFacturation.php?id=<?php echo $recherche['id_clt'] ?>">facture</a></td>
        </tr>
        <?php }?>

    </table>



<?php
include 'piedPage.php'; ?>
</body>

</html>
