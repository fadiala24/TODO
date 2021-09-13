<?php
 try {
 	$bdd=new PDO('mysql:host=localhost;dbname=td1','root','');
 } catch (Exception $e) {
 	die('Erreur'.$e->getMessage());
 }

?>