<?php
session_start();

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
    if ($aff['cin']==$_POST ['cin'])
    {
        $id=$aff['id_clt'];
        $req=$bdd->prepare('SELECT * FROM  projet.produit B, projet.consommation C WHERE B.id_produit=C.id_produit AND  C.id_clt=? ');
        $req->execute(array($id));
       $req1=$bdd->prepare('SELECT * FROM  projet.reservation R WHERE R.id_clt=? ');
       $req1->execute(array($id));
       $aff1=$req1->fetch();
       $chambre=$aff1['id_chamb'];


       $req2=$bdd->prepare('SELECT * FROM  projet.chambre C WHERE C.id_chamb=? ');
       $req2->execute(array($chambre));
       $aff2=$req2->fetch();

        $type=$aff2['type'] ;

        if ($type=="simple") $facture=100 ;
        elseif ($type=="double") $facture=120 ;
        elseif ($type=="triple") $facture=150 ;


   ?>
   <table align="center">
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
               <td colspan="2"> Totale</td>
               <td> <?php echo $facture ?> </td>
       </tr>
    <?php
    break ;
    }
    else
    {
        header("Location: Facturation.php?err");
    }
}
 
?>



