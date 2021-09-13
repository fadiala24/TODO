
<html>
<head>
	<title>Affichage</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Mises_en_forme.css">
	
</head>

<body style="background-color: rgb(255, 255, 128);">
	<div id="div">
			<form method="POST" action="code.php">
		 
			<input type="submit" name="réinitialiser" value="Acceuil" style="margin-right: 100px;">
		 	 <td>
<input  class="ai4" type="submit" name="recherche" value="Recherche">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="form-control form-control-dark w-100" name="rech" style="width: 140px;" type="text" placeholder="Search" aria-label="Search"></td>
		 	    
	<section>
	<article>
		<div class="buton1">  
		    <ul>
		</ul>
		</div>
	</article>
    <article>
    	<div class="formulaire1">
    		<center><p class="info1"><?php if(isset($_SESSION['msgauteur'])){echo $_SESSION['msgauteur']; unset($_SESSION['msgauteur']);} ?></center></p>
    		<center><p class="info2"><?php if(isset($_SESSION['msgeditelivre'])){echo $_SESSION['msgeditelivre']; unset($_SESSION['msgeditelivre']);} ?></center></p>
		
	<h2 class="l1">Le Resultat trouvé !</h2>
	
	<table  border="1" width="95%" style="">		
<thead>
                      <tr style="font-size: 17px;">
			<th>Id_tache </th>
			<th>Nom </th>
			<th>Satut </th>
			<th>Actions</th>
			
		</tr>
</thead>
<tbody>
<?php 

while ($et=$ps->fetch()) { ?>
                                 <tr>
				<td><?php echo ($et['id_tache'])?></td>
				
				<td><?php echo ($et['nom'])?></td>
				<td><?php echo ($et['statut'])?></td>
				<td><a href="modifier.php?id_tache=<?php echo($et["id_tache"])?>">Modifier</a>&nbsp;|&nbsp;
            <a onclick="return confirm('Voulez-vous supprimer!!!');" href="supprimer.php?id_tache=<?php echo($et["id_tache"])?>">Supprimer</a>&nbsp;&nbsp;
					</td>
				
			</tr>
<?php          }?>

</tbody>
</table>
	</div> 
	</article>
	</section>
</form>
</body>
</html>
