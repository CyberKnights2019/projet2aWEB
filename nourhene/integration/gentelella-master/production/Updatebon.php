<?PHP
include "C:/xampp/htdocs/Projet_integ1/core/bonC.php";
$bonC=new bonC();

	$bonC->modifierBon($_POST['idcL'],$_POST["liste"]);
	header('Location: liv_commande.php');


?>
