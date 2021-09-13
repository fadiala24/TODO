 <!Doctype>
<html>
	<head>
		<title>Gestion DES TACHES.</title>
		<meta charset="utf-8">
	</head>
	
	<body>
	<?php
		$nom=$_POST['nom'];
		$statut=$_POST['statut'];
		
		
		$fichier=fopen("text.txt","a+");
			if($fichier)
			{
				fputs($fichier,"\n".$nom.":".$statut);
				
			}
			else
			{
				echo 'l\'ouverture du fichier à échouer!!!';
			}
				fclose($fichier);	
					
	?>
		</form>
		
	</body>
</html>