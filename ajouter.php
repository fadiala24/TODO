<?php 
     
     
      $nom= htmlspecialchars(trim ($_POST['nom']));
      $statut= htmlspecialchars(trim ($_POST['statut']));
     
      
     if(empty($nom) )
         {
            $_SESSION['msgauteur']="Veuillez renseigner  le nom svp.";
             include("gestion.php");

         }
      else
      {
           require_once('conn.php');
         $requete= $bdd->prepare('SELECT nom FROM gestion WHERE nom=?');
         $requete->execute(array( $_POST['nom']));
         $donne=$requete->fetch(PDO::FETCH_ASSOC);
         
      if($donne['nom']==$nom)
         {
            $_SESSION['msgauteur']="Nom de Tâche déjà existant";
             include("gestion.php");
         }
        else
         
         {  
             
			$requete= $bdd->prepare('INSERT INTO gestion(nom,statut) VALUES (:nom,:statut) ');
			$requete->execute(array(
				    'nom'=>$nom,
				    'statut'=>$statut,
				    
				    ));
		$_SESSION['msgauteur']="Tâche ajouté!";
			
         include("liste.php");
                }
            }
        

				
?>