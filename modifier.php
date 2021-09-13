
<?php
    $id_tache = $_GET['id_tache'];
    require_once("conn.php");
    $ps=$bdd->prepare("SELECT * FROM gestion WHERE id_tache=?");
    $params=array($id_tache);
    $ps->execute($params);
    $taches = $ps->fetch();
?> 

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Espace de Modification</title>
        <link rel="stylesheet" href="Mise_en_forme.css">
    </head>
    <body>

        <div id="div">
            <form method="POST" action="modifier1.php">
                <h1>GESTIONS DES TACHES</h1>    
                <input type="submit" name="acceuil" value="Quitter" style="margin-right: 100px;" onClick="self.close()">
                <td>
                <input  class="ai4" type="submit" name="recherche" value="Recherche">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="form-control form-control-dark w-100" name="rech"  style="width: 140px;" type="text" placeholder="Search" aria-label="Search"></td>
                
                <hr>

                <center>
                    <div>
                        <input type="submit" name="modifier" value="Modifier">
                        <input type="submit" name="liste" value="Liste">
                    </div>
                </center>

                <div id="p1">
                    <h3><?php if(isset($_SESSION['msgauteur'])){echo $_SESSION['msgauteur']; unset($_SESSION['msgauteur']);} ?></h3>
                </div><br>
                
                <label for="nom">NOM : </label> 
                <input style="text-align: center; color: green;" type="text" id="nom"  name="nom" value="<?php echo($taches['nom'])?>" placeholder="nom" ><br><br><br>
                                
                <label for="pre">STATUT : </label>
                <input type="text" name="taskStatut" value="<?php echo($taches['statut'])?>">

                <div>
                    <input id="input1" style="text-align: center;" type="submit" name="réinitialiser" value="Réinitialiser" />      
                    <input type="submit" name="aide" value="aide">
                    <input type="hidden" name="idTask" value="<?= $id_tache ?>">
                </div>
            </form>
        </div>
    </body>
</html>