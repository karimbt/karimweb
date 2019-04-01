<?PHP
include "../entities/reclamation.php";
include "../core/reclamationR.php";
$reclamation=new Reclamation(75757575,'BEN Ahmed','Salah','');
$reclamationR=new ReclamationR();
$reclamationR->afficherReclamation($reclamation);
echo "****************";
echo "<br>";
echo "id_client:".$reclamation->getID();
echo "<br>";
echo "pseudo:".$reclamation->getPseudo();
echo "<br>";
echo "sujet:".$reclamation->getSujet();
echo "<br>";
echo "description:".$reclamation->getDescription();
echo "<br>";

?>