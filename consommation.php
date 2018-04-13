<?php
if(($_GET['err'])==1)
{
    echo("<p id='er1'>Erreur ID Produit inexistant</p>");
}
else if(($_GET['err'])==2)
{
    echo("<p id='er1'>Erreur ID Client inexistant</p>");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Consommation</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post" action="traitementConsommation.php">
    <label for="id_produit">ID produit</label><input type="number" name="id_produit" id="id_produit">
    <label for="id_clt">ID client</label><input type="number" name="id_clt" id="id_clt">
    <input type="submit" name="valider" value="valider">
</form>

</body>
</html>