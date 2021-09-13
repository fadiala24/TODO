<?php
		
		$nom= "";
		$statut="";
		
			
		
		if(isset($_POST['ajouter']))
		{
			include("ajouter.php");
		}
		elseif(isset($_POST['supprimer']))
		{
			include("supprimer.php");
		}
			elseif(isset($_POST['modifier']))
		{
			include("modifier.php");
		}
		if(isset($_POST['liste']))
		{
			header("location:liste.php");
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
			include("recherche.php");
		}
	?>
