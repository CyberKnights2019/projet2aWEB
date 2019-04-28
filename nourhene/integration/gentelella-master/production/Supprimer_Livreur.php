<?PHP
include "C:/xampp/htdocs/Projet_integ1/core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["cinL"])){
	$livreurC->supprimerLivreur($_POST["cinL"]);
	header('Location: Afficher_Livreur.php');
}

?>
