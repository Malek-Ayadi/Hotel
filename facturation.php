<?php
    include 'verificationAuthentification.php';

    
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
    if ((!(isset($_GET['find']))))
    $req=$bdd->query('SELECT * FROM projet.client C , projet.reservation R where (C.id_clt=R.id_clt)');
    else
        {
            $execution='%'.$_POST['recherche'].'%';
            $req=$bdd->prepare('SELECT * FROM projet.client C , projet.reservation R WHERE (C.id_clt=R.id_clt) AND (C.nom like ?)');
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
    <link href="facturationCss.css" rel="stylesheet">

    <title>Facturation</title>
</head>

<?php
    if  (isset($_GET['facture']))
    include 'traitementFacturation.php';
    else 
?>

<body>
<?php
include 'choixNavigation.php';
?>

	<div class="container col-11" id="cont1">



                <div class="container col-5" id="cont2">
                        <form method="post" action="Facturation.php?find">
                            <div class="form-row">
                                <div class="col">
                                     <input type="text" name="recherche" class="form-control form-control" placeholder="Recherche selon nom">
                                </div>
                                <div class="col">
                                     <input type="submit" name="rechercher" class="btn btn-primary">
                                </div>
                            </div>
                       </form>
                 </div>


                       <div class="container col-10" id="tb" >
                           <!-- style="position: absolute;left: 380px;top:180px;"-->
                                <table class="table table-striped " id="tbb">
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
                                        <td><a href="traitementFacturation.php?id=<?php echo $recherche['id_clt'] ?>&facture">facture</a></td>
                                     </tr>
                                                                 <?php }?>

                                </table>
                     </div>

          </div>
</div>

<div  id="foot"><?php
include 'piedPage.php'; ?></div>
</body>

</html>
