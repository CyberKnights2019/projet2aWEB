<?PHP
include "C:/xampp/htdocs/Projet_integ1/core/bonC.php";
$bonC=new bonC();
if (isset($_GET['cin'])){
	$bonC->supprimerBon($_GET['cin']);
	header('Location: liv_commande.php');
}

?>
