<?PHP
include "../config.php";
class ReclamationR {
function afficherReclamation ($reclamation){
		echo "id_client: ".$reclamation->getID()."<br>";
		echo "Pseudo: ".$reclamation->getPseudo()."<br>";
		echo "Sujet: ".$reclamation->getSujet()."<br>";
		echo "Description: ".$reclamation->getDescription()."<br>";
	}
	
	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (id_client,pseudo,sujet,description) values (:id_client, :pseudo,:sujet,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_client=$reclamation->getID();
        $pseudo=$reclamation->getPseudo();
        $sujet=$reclamation->getSujet();
        $description=$reclamation->getDescription();
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':pseudo',$pseudo);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':description',$description);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SELECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($id_client){
		$sql="DELETE FROM reclamation where id_client= :id_client";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_client',$id_client);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierReclamation($reclamation,$id_client){
		$sql="UPDATE reclamation SET id_client=:id_clients,pseudo=:pseudo,sujet=:sujet,description=:description WHERE id_client=:id_client";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id_clients=$reclamation->getID();
        $pseudo=$reclamation->getPseudo();
        $sujet=$reclamation->getSujet();
        $description=$reclamation->getDescription();
        $datas = array(':id_clients'=>$id_clients, ':id_client'=>$id_client, ':pseudo'=>$pseudo,':description'=>$description);
		
		$req->bindValue(':id_clients',$id_clients);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':pseudo',$pseudo);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':description',$description);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($id_client){
		$sql="SELECT * from reclamation where id_client=$id_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
}
?>