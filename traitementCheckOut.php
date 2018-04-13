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



$reponse = $bdd->query('SELECT * FROM projet.client');
while ($affiche=$reponse->fetch())
{
        if ($affiche['cin']==$_POST ['cin']) {


            $id = $affiche['id_clt'];

            $req = $bdd->prepare('SELECT R.id_res FROM  projet.reservation R WHERE R.id_clt=? ');
            $req->execute(array($id));
            $aff = $req->fetch();
            $res = $aff['id_res'];
            $req = $bdd->prepare('DELETE FROM projet.reservation  WHERE id_res=?  ');
            $req->execute(array($res));

            $req1 = $bdd->prepare('SELECT C.id_cons FROM  projet.consommation C WHERE C.id_clt=? ');
            $req1->execute(array($id));

            while ($aff1 = $req1->fetch()) {
                $cons = $aff1['id_cons'];
                echo $cons;
                $req = $bdd->prepare('DELETE FROM projet.consommation  WHERE id_cons=?  ');
                $req->execute(array($cons));

            }
                header("Location: main.php");
                 break;

        }

        else
                    {
                        header("Location: checkOut.php?err");
                    }





}
?>
