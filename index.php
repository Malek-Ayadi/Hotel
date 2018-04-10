

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Authentification</title>
    </head>
    
    <body>
    	<form method="post" action="traitementIndex.php">
    		<label for="login">Login</label><input type="text" name="login">
    		<label for="pwd">Password</label><input type="password" name="pwd">
    		<input type="submit" name="se_connecter" value="se connecter">
    		<?php
				if (isset($_GET['err']))
				if ($_GET['err']==2)
				{
					echo ("login/mdp erroné");
				}
			?>
    	</form>
    </body>
    </html>
