<?php
			
		


		if(isset($_POST['ajouter']))
		{
			include("ajouter.php");
		}
		elseif(isset($_POST['supprimer']))
		{
			include("liste.php");
		}
			elseif(isset($_POST['modifier']))
		{
			include("liste.php");
		}
		elseif(isset($_POST['liste']))
		{
			include("liste.php");
		}
		elseif(isset($_POST['aide']))
		{
			include("aide.php");
		}
		elseif(isset($_POST['réinitialiser']))
		{
			include("gestion.php");
		}

		elseif(isset($_POST['recherche']))
		{
			include("recherche.php");
		}
	?>