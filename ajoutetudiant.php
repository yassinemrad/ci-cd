<?php
include('cnx.php');
$cin = $_GET['cin'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$age = $_GET['age'];

$c=new cnx();
$cnx=$c->cnx ;
$req="INSERT INTO `etudiant`(`cin`, `nom`, `prenom`, `age`) VALUES ($cin,'$nom','$prenom',$age)";
$cnx->query($req);


?>