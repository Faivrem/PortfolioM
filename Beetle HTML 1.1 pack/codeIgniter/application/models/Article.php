<?php

class Article extends CI_Model {

	protected $tableB ='ArticleBlog';
	protected $tableQ ='ArticleQuebec';


	public function ajouter_articleB($titre,$date,$contenu){
		$this->db->set('titre',  $titre);
		$this->db->set('date',   $date);
		$this->db->set('contenu', $contenu);

		//	Ces données ne seront pas échappées
		$this->db->set('date', 'NOW()', false);

		return $this->db->insert($tableB);
	}

	public function ajouter_articleQ($titre,$date,$contenu){
		$this->db->set('titre',  $titre);
		$this->db->set('date',   $date);
		$this->db->set('contenu', $contenu);
	
		//	Ces données ne seront pas échappées
		$this->db->set('date', 'NOW()', false);
	
		return $this->db->insert($tableQ);
	}
	
	public function countQ(){
		return (int) $this->db->count_all_results($tableQ);
	}

	public function countB(){
		return (int) $this->db->count_all_results($tableB);
	}

	public function liste_b(){
		return $this->db->select('*')
		->from($tableb)
		->order_by('id', 'desc')
		->get()
		->result();
	}

	public function liste_q(){
		return $this->db->query("SELECT * FROM ArticleQuebec")->result();
	}

	public function dix_q(){
		return $this->db->query('SELECT * FROM `ArticleQuebec` ORDER BY `ArticleQuebec`.`date` DESC LIMIT 5');
	}

	public function dix_b(){
		return $this->db->query('SELECT * FROM `ArticleBlog` ORDER BY `ArticleBlog`.`date` DESC LIMIT 5');
	}
	public function get_blog($titre){
		return $this->db->select('*')->from('ArticleBlog')->where(array('titre' => $titre))->get()->row();
	}
	public function get_quebec($titre){
		return $this->db->select('*')->from($tableQ)->where(array('titre' => $titre))->get()->row();
	}
}
?>


