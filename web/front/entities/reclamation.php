<?PHP
class Reclamation{
	private $id_client;
	private $pseudo;
	private $sujet;
	private $description;
	function __construct($id_client,$pseudo,$sujet,$description){
		$this->id_client=$id_client;
		$this->pseudo=$pseudo;
		$this->sujet=$sujet;
		$this->description=$description;
	}
	
	function getID(){
		return $this->id_client;
	}
	function getPseudo(){
		return $this->pseudo;
	}
	function getSujet(){
		return $this->sujet;
	}
	function getDescription(){
		return $this->description;
	}
	

	function setPseudo($pseudo){
		$this->pseudo;
	}
	function setSujet($sujet){
		$this->sujet=$sujet;
	}
	function setDescription($description){
		$this->description=$description;
	}
	
}

?>