<?php
$user= $_POST['user'];
$mdp = $_POST['mdp'];
include 'Produit.class.php';
$Produit= new produit;

$rep=$Produit->login($user,$mdp);
if($rep->rowCount() >0)
{session_start();
    $data=$rep->fetch();
$_SESSION['id']=$data['id'];
ECHO $_SESSION['id'];
//header('Location: ../afficherprod.php');
}
