<?php

	include 'verificationAuthentification.php';

	
if (isset($_GET['err']))
{
    echo("<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
  <strong>Done !</strong> Votre consommation a été enregistrée avec succès  !!
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>");

}


	try
	{
		$bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());

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
    <link href="./css/background.css" rel="stylesheet">
    <title>Consommation</title>
</head>

<body>
     <?php
         include 'choixNavigation.php';
     ?>
	<div class="container col-12">
	<div  style="margin-right:700px; margin-top: 150px;margin-bottom: 150px; padding-left:50px; padding-right: 50px " >

<?php
    try
    {
        $bdd= new PDO('mysql:host=localhost;dbName=projet', 'root','');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());

    }

    $req=$bdd->query('SELECT id_produit,libelle FROM projet.produit P');
    $aff=$req->fetchAll( PDO::FETCH_ASSOC );
    $i=0;

    $req2=$bdd->query('SELECT DISTINCT C.id_clt,C.prenom FROM projet.client C, projet.reservation R WHERE C.id_clt=R.id_clt ');
    $aff2=$req2->fetchAll( PDO::FETCH_ASSOC );
    $j=0;
 ?>
        

    
<form method="post" action="traitementConsommation.php">
	<div class="form-group">
            <p>
                <label for="type">Choisir la consommation: </label>
                <select size="1" name="id_produit" id="id_produit" required class="form-control form-control-lg"> 
                <?php
                
                    while ($i<count($aff))
                    {
                ?>
                       <option value="<?php echo ($aff[$i]['id_produit']);  ?>" ><?php echo ($aff[$i]['libelle']);  ?></option>

                <?php 
                $i++;      
                    }
                ?>
                </select>
             </p>   
                
            <p>
                <label for="type">Choisir le Client: </label>
                <select size="1" name="id_clt" id="id_clt" required class="form-control form-control-lg"> 
                <?php
                
                    while ($j<count($aff2))
                    {
                ?>
                       <option value="<?php echo ($aff2[$j]['id_clt']);  ?>" ><?php echo ($aff2[$j]['prenom']);  ?></option>

                <?php 
                $j++;      
                    }
                ?>
                </select> 
             </p>   
                   
            <input type="submit" name="valider" value="valider" class="btn "></p>
</div>
</form>
</div>
</div>

<?php include 'piedPage.php';  ?>
</body>

</html>