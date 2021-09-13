<!Doctype>
<html>
	<head>
		<title>Gestion DES TACHES</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Mise_en_forme.css">
	</head>
	<?php 
	   
	   $nom="";
	   $statut="";
	   // $tel="";
		 ?>
	<body style="background-image: url(todo.jpg);">
		<div id="div">
			<form method="POST" action="code.php">
			<h1>GESTIONS DES TACHES</h1> 	
			<input type="submit" name="acceuil" value="Quitter" style="margin-right: 100px;" onClick="self.close()">
               <td>
			<input  class="ai4" type="submit" name="recherche" value="Recherche">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="form-control form-control-dark w-100" name="rech"  style="width: 140px;" type="text" placeholder="Search" aria-label="Search">
		</td>
			
			
			<hr>	
				
       <div style="border: 2px solid black;  float: left;  height: 75%; line-height: 35px; font-size: 20px;
						    list-style-type: none;  width: 28%;  margin-left:-25px; 
						     border-radius: 15px;
		   ">

          <ul><br><br>
	 <!--  <input type="submit" name="lire" value="Lire"><br><br> -->
	<input type="submit" name="ajouter" value="Ajouter"><br><br>
	<input type="submit" name="liste" value="Liste">
		</ul>
		</div>

			<div id="p1">
				<h3><?php if(isset($_SESSION['msgauteur'])){echo $_SESSION['msgauteur']; unset($_SESSION['msgauteur']);} ?></h3>
			</div>
			<br>
			<br>
			
			<br>
			<br>
							

										
			<label for="nom">NOM :</label>
			<input style="text-align: center; color: green;" type="text" id="nom"  name="nom" value="<?php echo $nom?>" placeholder="nom" ><br><br><br>
							
		             <label for="pre">STATUT : </label>
		             <select name="statut" size="1"  style="text-align: center; color: green;" type="text" id="pre" value="<?php echo $statut?>" placeholder="statut">
		             	<option>choisir
		             		<option>Terminer
		             			<option>Non Terminer
		             				<option>En Cours

		             </select>
			<br> 
							
			        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input id="input1" style="text-align: center;" type="submit" name="réinitialiser" value="Réinitialiser" />		
			<input type="submit" name="aide" value="aide">
	     </form>
	 </div>
	</body>
</html>