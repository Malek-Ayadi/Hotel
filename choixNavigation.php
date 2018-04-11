<?php
	if ($_SESSION['admin']==1)
		include 'navigationAdmin.php';
	else
		include 'navigationEmployee.php'
?>