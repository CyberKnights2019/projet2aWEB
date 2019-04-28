<?php
session_start();
include "C:/xampp/htdocs/Projet_integ1/core/panierC.php";

unset($_SESSION['pseudo']);
$p= new PanierC();
$p->supprimerPanierTout();
header("Location: index.php");
echo $_SESSION['pseudo'];
 ?>
