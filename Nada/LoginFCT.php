<?php

include "../cores/clientC.php";

include "../cores/loginC.php";


$cc=new clientC();

if (isset($_POST['pseudo']) and isset($_POST['motdepasse']))
{
	$resultat = $cc->recupererClientLogin($_POST['pseudo'],$cc->conn);

	$count = count($resultat);	
  if($count==0) //pas de user qui a ce pseudo
  {
		  header('location: login.php?message= Username doesnt exist');
  
  }
  else
  {
	  $pseudo=$_POST['pseudo'];
	 foreach ($resultat as $r)
	 {
		 if($r['pseudo']==$pseudo)
		 {
			 
			if ($r['motdepasse']!= $_POST['motdepasse'])
		 {
		 header('location: login.php?message2= Wrong password');
 
		 }
		
		 else
		 {
			 /* $_SESSION['login_user'] = $pseudo;
					header("location: compte.php"); */
$cc=new loginC();
$cc->loginn($cc->conn);
     //echo "Bienvenue ",$r['pseudo'];
	 
		 } 
			 
		 }
		 else // if $r['pseudo']!=$pseudo
		 {
					 header('location: login.php?message= Username doesnt exist&message2= Wrong password');
 
		 }
		 
		
	 }

  }
}
?>