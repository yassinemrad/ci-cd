<?php
include('cnx.php');
class crud{
    
public $cnx;
function __construct()
{
    $c=new cnx();
    $this->cnx=$c->cnx;

}
function affiche($cnx)
{
    $req="SELECT * FROM `etudiant`";
    $list=$cnx->query($req);
    $resultat=$list->fetchAll();
    return $resultat;
}
function add($cin,$nom,$prenom,$age)

{
$req="INSERT INTO `etudiant`(`cin`, `nom`, `prenom`, `age`) VALUES ('".$cin."','".$nom."','".$prenom."','".$age."')";
$cnx->query($req);
}



}

?>