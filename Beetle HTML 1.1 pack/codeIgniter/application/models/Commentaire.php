<?php

class Commentaire extends CI_Model {
	
	protected $tableB ='Commentaireblog';
	protected $tableQ ='CommentaireQuebec';


	public function ajouter_commentaireB($pseudo,$txt,$idArticle){
		$this->db->set('pseudo',  $pseudo);
		$this->db->set('txt',   $txt);
		$this->db->set('idArticle', $idArticle);
		
		//	Ces données ne seront pas échappées
		$this->db->set('date', 'NOW()', false);
	
	return $this->db->insert('Commentaireblog');
	}
	
	public function ajouter_commentaireQ($pseudo,$txt,$idArticle){
		$this->db->set('pseudo',  $pseudo);
		$this->db->set('txt',   $txt);
		$this->db->set('idArticle', $idArticle);
		
		//	Ces données ne seront pas échappées
		$this->db->set('date', 'NOW()', false);
	
	return $this->db->insert('CommentaireQuebec');
	}
	public function countQ(){
		return (int) $this->db->count_all_results('CommentaireQuebec');
	}
	
	public function countB(){
		return (int) $this->db->count_all_results('Commentaireblog');
	}
	
	public function liste_Q(){
		return $this->db->select('*')
			->from('CommentaireQuebec')
			->order_by('id', 'desc')
			->get()
			->result();
	}	
	
	public function liste_B(){
		return $this->db->query("SELECT * FROM Commentaireblog")->result();
	}	
	//public $id, $idArticle, $date,$txt;
	
	/*public static function setFromId( $id,$data ) {                                                                                                  
		$db = Database::getInstance();
		$sql = "UPDATE Commentaire set texte=:texte,dateCom=:dateCom,visible=visible ,album=:album WHERE idCommentaire = :idCommentaire";
		$stmt = $db->prepare($sql);
		//$stmt->setFetchMode(PDO::FETCH_CLASS, "Contact");
		return $stmt->execute(array(
			":idCommentaire" => $id,
			":texte"=>$data['texte'],
			":dateCom"=>$data['dateCom'],
			":album"=>$data['album'],
			":visible"=>$data['visible']));
		//return $stmt->fetch();

	public function toHTML()
	{
		return ($this->texte)." le ".($this->dateCom);
	}
	public static function getFromId( $id ) {
		$db = Database::getInstance();
		$sql = "SELECT * FROM Commentaire WHERE album= :id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Commentaire");
		$stmt->execute(array(":id" => $id));
		return $stmt->fetch();
	}

		public static function getCom( $id ) {
		$db = Database::getInstance();
		$sql = "SELECT * FROM Commentaire WHERE idCommentaire= :id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Commentaire");
		$stmt->execute(array(":id" => $id));
		return $stmt->fetch();
	}
	
	public static function getList() {
		$db = Database::getInstance();
		$sql = "SELECT * FROM Commentaire";
		$stmt = $db->query($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Commentaire");
		return $stmt->fetchAll();
	}
	public static function getListFromPseudo($pseudo){
		$db = Database::getInstance();
		$sql = "Select * FROM Commentaire WHERE pseudo = :pseudo";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Commentaire");
		$stmt->execute(array(":pseudo" => $pseudo));
		return $stmt->fetchAll();
	}
	public static function supCom($id){
		$db = Database::getInstance();
		$sql = "DELETE FROM Commentaire WHERE idCommentaire = :id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Commentaire");
		$stmt->execute(array(":id" => $id));
		return $stmt->fetch();
	}
	
	public static function getListFromDate($date){
		$db = Database::getInstance();
		$sql = "Select * FROM Commentaire WHERE dateCom >= :date";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Commentaire");
		$stmt->execute(array(":date" => $date));
		return $stmt->fetchAll();
	}	}*/
}
?>


