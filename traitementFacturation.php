<?php
    include 'verificationAuthentification.php';


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', ''); //changer le mdp en fonction du serveur local de ton pc
}
catch (PDOException $e)
{
    die('erreur : '.$e->getMessage());
}
?>



   <?php
    $reponse = $bdd->query('SELECT * FROM projet.client');
while ($aff=$reponse->fetch())
{
    if ($aff['id_clt']==$_GET['id'])
    {
        $id=$aff['id_clt'];
        $req=$bdd->prepare('SELECT * FROM  projet.produit B, projet.consommation C WHERE B.id_produit=C.id_produit AND  C.id_clt=? ');
        $req->execute(array($id));
       $req1=$bdd->prepare('SELECT * FROM  projet.reservation R WHERE R.id_clt=? ');
       $req1->execute(array($id));
       $aff1=$req1->fetch();
       $z=$aff1['id_res'];

       if(!isset($z))
           {
               echo("<p id='er2'>Reservation sous ce CIN est introuvable </p>");// à quoi ça sert ?!!
               exit();
           }


       $chambre=$aff1['id_chamb'];


       $req2=$bdd->prepare('SELECT * FROM  projet.chambre C WHERE C.id_chamb=? ');
       $req2->execute(array($chambre));
       $aff2=$req2->fetch();

        $type=$aff2['type'] ;

        if ($type=="simple") $f=100 ;
        elseif ($type=="double") $f=120 ;
        elseif ($type=="triple") $f=150 ;
        $facture=$f;


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

    <title>Facture Client id n° <?php echo $_GET['id'] ?></title>

</head>

<body>

<?php include ('choixNavigation.php'); ?>

   
    <div class="container col-5" style="position: absolute;left: 380px;top:180px;">
      <table id="tbb" class="table table-striped " >
        <tr>
            <td>N°Consommation</td> <td>Libellé</td> <td>Prix</td>
        </tr>


           <?php
            while ($affiche=$req->fetch())
           {
            ?>

                <tr>
                    <td>
                        <?php
                        echo ($affiche['id_cons']);
                        ?>
                    </td>
                     <td>
                        <?php
                        echo ($affiche['libelle']);
                        ?>
                    </td>
                     <td>
                        <?php
                        echo ($affiche['prix']);
                        $facture=$facture+$affiche['prix'] ; 
                        ?>
                    </td>
                </tr>


           <?php } ?>


               <tr>
                   <td colspan="2"> Chambre  <?php echo $type; ?></td>
                   <td> <?php echo $f ?> </td>
               </tr>
              <tr>
                   <td colspan="2"> Totale</td>
                   <td> <?php echo $facture ?> </td>
              </tr>
            </table>

              <form method="post" action="traitementCheckOut.php?id=<?php echo $_GET['id']?>">
                  <input type="submit" name="entrer" value="Check out" class="btn btn-primary">
                  <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='facturation.php'">Retour</button>
                  <button type="button" class="btn btn-primary btn" value="imprimer" onclick="document.location.href='#'">Imprimer</button>
              </form>
    </div>
<div ><?php include 'piedPage.php'; ?></div>
    <?php

        }

        }
    exit() ;
           echo("<p id='er1'>Erreur CIN</p>");

     ?>




</body>

</html>