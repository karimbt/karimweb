<?PHP
include "../core/commandeC.php";
$employeC=new CommandeC();
if (isset($_POST["reference"])){
	$employeC->supprimerEmploye($_POST["reference"]);
	header('Location: commandeB.php');
}

?>