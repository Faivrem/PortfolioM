<?php

class Article extends CI_Model {

	protected $tableB ='ArticleBlog';
	protected $tableQ ='ArticleQuebec';


	public function ajouter_articleB($titre,$date,$contenu,$summary,$img){
		$this->db->set('titre',  $titre);
		$this->db->set('date',   $date);
		$this->db->set('contenu', $contenu);
		$this->db->set('sommary', $summary);
		$this->db->set('img', $img);

		//	Ces données ne seront pas échappées
		$this->db->set('date', 'NOW()', false);

		return $this->db->insert($tableB);
	}

	public function ajouter_articleQ($titre,$date,$contenu){
		$this->db->set('titre',  $titre);
		$this->db->set('date',   $date);
		$this->db->set('contenu', $contenu);
		$this->db->set('sommary', $summary);
		$this->db->set('img', $img);

		//	Ces données ne seront pas échappées
		$this->db->set('date', 'NOW()', false);

		return $this->db->insert($tableQ);
	}

	public function countQ(){
		return (int) $this->db->count_all_results('ArticleQuebec');
	}

	public function countB(){
		return (int) $this->db->count_all_results('ArticleBlog');
	}

	public function liste_b(){
	return $this->db->query("SELECT * FROM `ArticleBlog` ORDER BY `ArticleBlog`.`idArticle` DESC	")->result();
	}

	public function liste_q(){
		return $this->db->query("SELECT * FROM `ArticleQuebec` ORDER BY `ArticleQuebec`.`idArticle` DESC")->result();
	}

	public function dix_q(){
		return $this->db->query('SELECT * FROM `ArticleQuebec` ORDER BY `ArticleQuebec`.`date` DESC LIMIT 5')->result();;
	}

	public function dix_b(){
		return $this->db->query('SELECT * FROM `ArticleBlog` ORDER BY `ArticleBlog`.`date` DESC LIMIT 5')->result();;
	}
	public function get_blog($id){
		return $this->db->select('*')->from('ArticleBlog')->where(array('idArticle' => $id))->get()->row();
	}
	public function get_quebec($id){
		return $this->db->select('*')->from("ArticleQuebec")->where(array('idArticle' => $id))->get()->row();
	}

	public function alea_q(){
		return $this->db->query('SELECT * FROM ArticleQuebec ORDER BY RAND() LIMIT 3')->result();
	}
	public function alea_b(){
		return $this->db->query('SELECT * FROM ArticleBlog ORDER BY RAND() LIMIT 3')->result();
	}
}
?>
