<?PHP
include "../entities/reclamation.php";
include "../core/reclamationR.php";

if (isset($_POST['id_client']) and isset($_POST['pseudo']) and isset($_POST['sujet']) and isset($_POST['description'])){
$reclamation1=new reclamation($_POST['id_client'],$_POST['pseudo'],$_POST['sujet'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reclamation1R=new ReclamationR();
$reclamation1R->ajouterReclamation($reclamation1);
header('Location: afficherReclamation.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>