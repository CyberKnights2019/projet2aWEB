<?PHP

include 'C:/wamp64/www/projet_integ-master/core/clientC.php';
$cc=new clientC();


session_start();


	if(isset($_SESSION['email']) || isset($_SESSION['motdepasse']))
	{
if(isset($_POST['modify']) )

{

	$newClient=new Client ($_POST['pseudo'],$_POST['email'],$_POST['motdepasse']);
	$cc->modifierClient($newClient,$cc->conn);

	header('location:ProfilClient.php?modify=done');


}
else
		{
			echo "error modifying";

		}
	}

	else
	{
		"error2";

	}





?>
