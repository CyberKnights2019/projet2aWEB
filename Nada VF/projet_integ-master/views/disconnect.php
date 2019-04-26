<?php
session_start();
include "C:/wamp64/www/projet_integ-master/core/panierC.php";

unset($_SESSION['pseudo']);
$p= new PanierC();
$p->supprimerPanierTout();
header("Location: index.php");
echo $_SESSION['pseudo'];
 ?>
