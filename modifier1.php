
<?php
	require_once("conn.php");

	if(isset($_POST['idTask']) and !empty($_POST['idTask']))
	{
		if(isset($_POST['nom']) and !empty($_POST['nom']) and isset($_POST['taskStatut']) and !empty($_POST['taskStatut']))
		{
			$id_tache = $_POST['idTask'];
			$nom = $_POST['nom'];
			$taskStatut = $_POST['taskStatut'];
			
			$ps=$bdd->prepare("UPDATE gestion SET nom = ?, statut = ? WHERE id_tache = ?;");
			$params = array($nom, $taskStatut, $id_tache);
			$ps->execute($params);
			
			header("Location: liste.php");
		}
		else
		{
			echo "...............";
		}
	}
	else{
		echo "Error.............";
	}
?>
