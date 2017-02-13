<?php

class Image extends CI_Model {


	public function ajouter_image($titre,$description,$categorie1,$categorie2){
		$this->db->set('titre',  $titre);
		$this->db->set('description',   $description);
		$this->db->set('categorie1', $categorie1);
		$this->db->set('categorie2', $categorie2);

		return $this->db->insert($tableB);
	}

	public function count(){
		return (int) $this->db->count_all_results('Image');
	}

	public function liste(){
		return $this->db->query("SELECT * FROM `Image` ")->result();
	}
}
?>
