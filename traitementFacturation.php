<?php


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
       $z=$aff1['id_res'];

       if(!isset($z))
           {
               echo("<p id='er2'>Reservation sous ce CIN est introuvable </p>");
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
<div class="container col-5" style="position: absolute;left: 80px;top:180px;">
   <table  class="table table-striped " >
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
</div>
    <?php
    exit() ;
    }




}
    echo("<p id='er1'>Erreur CIN</p>");
?>



