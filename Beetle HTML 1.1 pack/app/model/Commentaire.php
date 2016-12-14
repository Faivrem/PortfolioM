<?php

class Commentaire extends Model {
	public $id,$pseudo,$date,$txt
	
	public static function setFromId( $id,$data ) {                                                                                                  
		$db = Database::getInstance();
		$sql = "UPDATE Commentaire set txt=:txt,date=:date,pseudo=:pseudo WHERE id = :id";
		$stmt = $db->prepare($sql);
		//$stmt->setFetchMode(PDO::FETCH_CLASS, "Contact");
		return $stmt->execute(array(
			":id" => $id,
			":txt"=>$data['txt'],
			":date"=>$data['date'],
			":pseudo"=>$data['pseudo']));
		//return $stmt->fetch();
	}
	public function toHTML()
	{
		return ($this->txt)." le ".($this->date);
	}
	/*public static function getFromId( $id ) {
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
	}*/
	
	public static function getList() {
		$db = Database::getInstance();
		$sql = "SELECT * FROM Commentaire";
		$stmt = $db->query($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Commentaire");
		return $stmt->fetchAll();
	}
	/*
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
		$sql = "DELETE FROM Commentaire WHERE id = :id";
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
	}*/
}
?>


