<?php
//include "../entities/config.php";
 session_start();

class loginC {
	
	public $conn;
		
	
	function __construct()
	{
		$c=new config();
		$this->conn=$c->getConnexion();
	}
	
	function loginn($conn)
	{
	if(isset($_POST['pseudo']) && isset($_POST['motdepasse']))
	{
		$pseudo = ($_POST['pseudo']);
		$motdepasse = ($_POST['motdepasse']);
		
	$requete = "SELECT * FROM client WHERE pseudo = '$pseudo' AND motdepasse = '$motdepasse'";
	
		$resultat = $conn->query($requete);
		$result=$resultat->fetch() ; 
		$count = $resultat->rowCount();
		
		if($count==1)
		{
			$_SESSION['pseudo']= $result['pseudo']; 
			$_SESSION['motdepasse'] = $motdepasse;
			
			header("location:ProfilClient.php");
		
		//var_dump($_SESSION); 
		}
		
		else
		{
		
echo " error";			
		}
	}
	else
	{
		echo'no';
		
	}
	}
	}
?>