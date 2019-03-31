<?php

include "../cores/adminC.php";

include "../cores/loginC.php";


$cc=new adminC();

if (isset($_POST['pseudoA']) and isset($_POST['modpA']))
{
	$resultat = $cc->recupererAdminLogin($_POST['pseudoA'],$cc->conn);

	$count = count($resultat);	
  if($count==0) //pas de user qui a ce pseudo
  {
		  header('location: login.php?message= Username doesnt exist');
  
  }
  else
  {
	  $pseudoA=$_POST['pseudoA'];
	 foreach ($resultat as $r)
	 {
		 if($r['pseudoA']==$pseudoA)
		 {
			 
			if ($r['mdpA']!= $_POST['mdpA'])
		 {
		 header('location: login.php?message2= Wrong password');
 
		 }
		
		 else
		 {

/*$cc=new loginC();
$cc->loginn($cc->conn);
header("location: profile.php");*/

        echo "Bienvenue ",$r['pseudoA'];

	 
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