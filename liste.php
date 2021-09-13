<?php

	require_once("conn.php");
	$req="select * from gestion";
	$ps=$bdd->prepare($req);
	$ps->execute();
?>

<html>
	<head>
		<title>Affichage</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Mises_en_forme.css">
	</head>

	<body style="background-color:rgba(106, 121, 247, 1);">
		<div id="div" >
			<form method="POST" action="gestion.php">
			<h1 class="l1">La liste des Taches</h1>
			<input type="submit" name="acceuil" value="Acceuil " style="margin-right: 100px;">
			<hr>

			<table  border="1" width="95%">		
				<thead>
					<tr style="font-size: 17px;">
						<th>Id_Tache </th>
						<th>Nom </th>
						<th>Statut</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($et=$ps->fetch()) { ?>
						<tr>
							<td><?php echo ("<font color =red >".$et['id_tache'])?></td>
								<td><?php echo ($et['nom'])?></td>
								<td><?php echo ($et['statut'])?></td>
								<td><a href="modifier.php?id_tache=<?php echo($et["id_tache"])?>">Modifier</a>&nbsp;|&nbsp;
								<a onclick="return confirm('Voulez-vous supprimer!!!');" href="supprimer.php?id_tache=<?php echo($et["id_tache"])?>">Supprimer</a>&nbsp;&nbsp;
							</td>
						</tr>
					<?php }?>
				</tbody>
			</table>
	    	</form>
		</div>
	</body>
</html>


