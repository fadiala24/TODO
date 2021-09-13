<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>


	<?php
		require_once("conn.php");
			
		
		if(isset($_POST['ajouter']))
		{
			include("ajouter.php");
		}
		elseif(isset($_POST['supprimer']))
		{
			include("supprimer.php");
		}
			if(isset($_POST['modifier']))
		{
			include("modifier.php");
		}
		if(isset($_POST['liste']))
		{
			include("liste.php");
		}
		elseif(isset($_POST['aide']))
		{
			header("location:aide.php");
		}
		elseif(isset($_POST['réinitialiser']))
		{
			header("gestion.php");
		}

		elseif(isset($_POST['recherche']))
		{
			header("recherche.php");
		}
	?>

