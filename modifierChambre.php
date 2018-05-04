<?php
	include 'verificationAuthentification.php';
    include 'verificationAdmin.php';

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
        <link rel="shortcut icon" href="logo2.png">

        <!-- Custom styles for this template -->
        <link href="ajouterPersonnelCss.css" rel="stylesheet">
         <link href="./css/background.css" rel="stylesheet">
		<title>Modifier Personnel</title>
	</head>
	<body>
        <?php
    include ("navigationAdmin.php");
    ?>
    <div class="container col-12">
    <div  style="margin-right:700px; margin-top: 150px;margin-bottom: 150px; padding-left:50px; padding-right: 50px " >
    		<form action="traitementModifierChambre.php?id=<?php echo $_GET['id']?>" method="POST">
                
                <div class="col">
                  <input type="number" class="form-control" readonly placeholder="Id" name="id_chamb" id="id" value="<?php echo $_GET['id'] ?>" required>
                </div>
                <div class="col">
                 <p>
                    <label for="type">Type de la chambre: </label>
                    <select size="1" name="type" id="type" required class="form-control form-control-lg"> 
                        <option value="simple">Simple</option> 
                        <option value="double">Double</option> 
                        <option value="triple">Triple</option>
                    </select>
                </p>
                </div>
                

                <button type="submit" class="btn btn-primary btn" value="modifier">Modifier</button>
                <button type="button" class="btn btn-primary btn" value="retour" onclick="document.location.href='espaceAdmin.php'">Retour</button>
    
            </form>
        </div>
        </div>
        
            <?php
    include ("piedPage.php");
    ?>

	</body>
	</html>