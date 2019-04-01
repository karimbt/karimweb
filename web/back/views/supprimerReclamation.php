<?PHP
include "../core/reclamationR.php";
$reclamationR=new ReclamationR();
if (isset($_POST["id_client"])){
	$reclamationR->supprimerReclamation($_POST["id_client"]);
	header('Location: reclamation.php');
}

?>