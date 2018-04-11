<?php
	if ($_SESSION['admin']==1)
		include 'menuAdmin.php';
	else
		include 'menuEmployee.php'
?>