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

<table align="center">
    <tr>
        <td>id_cons</td> <td>prix</td> <td>nbr</td>
    </tr>
    <?php
    $reponse = $bdd->query('SELECT nom, prenom FROM projet.client WHERE nom = "' . $_POST['nom'] . '"  AND prenom ="' . $_POST['prenom'] . '" ');

    if ($donnees = $reponse->fetch())
             {

                    $req=$bdd->query('SELECT prix.projet.consommation nbr.projet.consommation nom.projet.client , prenom.projet.client id_clt.projet.client id_clt.projet.consommation id_cons.projet.consommation from projet.client WHERE id_clt.projet.client = id_clt.projet.consommation');
                    while($resultat=$req->fetch())
                    {
                        if (strtoupper($resultat['nom'])==strtoupper($_POST['nom']))
                        {

                            if ($resultat['prenom']==$_POST['prenom'])
                            {
                                ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo ($aff['projet.consommation.id_cons']);
                                            ?>
                                        </td>

                                        <td>
                                            <?php
                                            echo ($aff['prix.projet.consommation']);
                                            ?>
                                        </td>

                                        <td>
                                            <?php
                                            echo ($aff['nbr.projet.consommation']);
                                            ?>
                                        </td>
                                    </tr>
                            <?php }
                        }

                    }
              }
    else
        {
            echo 'Pas de client sous ce nom';
        }
?>
</table>