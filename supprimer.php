<?php
$id_tache = $_GET['id_tache'];
require_once("conn.php");
$ps=$bdd->prepare("DELETE FROM gestion WHERE id_tache=?");
$params=array($id_tache);
$ps->execute($params);
header("location:liste.php");
?>