<?php
require_once('conn.php');
$var=$_POST['rech'];
if (!empty($var)) {

$req=" SELECT * FROM gestion WHERE nom='$var' or statut='$var'";
$ps=$bdd->prepare($req);
$ps->execute();

include("resulte.php");
}
 else{
	header("location:no-result.php");
}
?>