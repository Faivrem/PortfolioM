<?php
class Commentaire extends CI_Model {
	protected $tableB = 'Commentaireblog';
	protected $tableQ = 'CommentaireQuebec';
	
	public function ajouter_commentaireB($pseudo, $txt, $idArticle) {
		if ($pseudo != '' && $txt != '') {
			$this->db->set ( 'pseudo', $pseudo );
			$this->db->set ( 'txt', $txt );
			$this->db->set ( 'idArticle', $idArticle );
			
			// Ces données ne seront pas échappées
			$this->db->set ( 'date', 'NOW()', false );
			
			return $this->db->insert ( 'Commentaireblog' );
		}
	}
	public function ajouter_commentaireQ($pseudo, $txt, $idArticle) {
		$this->db->set ( 'pseudo', $pseudo );
		$this->db->set ( 'txt', $txt );
		$this->db->set ( 'idArticle', $idArticle );
		
		// Ces données ne seront pas échappées
		$this->db->set ( 'date', 'NOW()', false );
		
		return $this->db->insert ( 'CommentaireQuebec' );
	}
	public function countQ() {
		return ( int ) $this->db->count_all_results ( 'CommentaireQuebec' );
	}
	public function countB() {
		return ( int ) $this->db->count_all_results ( 'Commentaireblog' );
	}
	public function liste_q() {
		return $this->db->select ( '*' )->from ( 'CommentaireQuebec' )->order_by ( 'id', 'desc' )->get ()->result ();
	}
	public function liste_b() {
		return $this->db->query ( "SELECT * FROM ArticleBlog" )->result ();
	}
	public function dix_q() {
		$this->db->query ( 'SELECT * FROM `CommentaireQuebec` ORDER BY `CommentaireQuebec`.`date` DESC LIMIT 5' );
	}
	public function dix_b() {
		$this->db->query ( 'SELECT * FROM `Commentaireblog` ORDER BY `Commentaireblog`.`date` DESC LIMIT 5' );
	}
	public function q_id($id) {
		return $this->db->select ( '*' )->from ( 'CommentaireQuebec' )->where ( array (
				'idArticle' => $id 
		) )->order_by ( 'id', 'desc' )->get ()->result ();
	}
	public function b_id($id) {
		return $this->db->select ( '*' )->from ( 'Commentaireblog' )->where ( array (
				'idArticle' => $id 
		) )->order_by ( 'id', 'desc' )->get ()->result ();
	}
	public function count_q($id) {
		$nb = $this->db->select ( '*' )->from ( 'CommentaireQuebec' )->where ( array (
				'idArticle' => $id 
		) )->order_by ( 'id', 'desc' )->get ()->num_rows ();
		if ($nb > 1) {
			$nb = $nb . " Commentaires";
		} else {
			$nb = $nb . " Commentaire";
		}
		return $nb;
	}
	public function count_b($id) {
		$nb = $this->db->select ( '*' )->from ( 'Commentaireblog' )->where ( array (
				'idArticle' => $id 
		) )->order_by ( 'id', 'desc' )->get ()->num_rows ();
		if ($nb > 1) {
			$nb = $nb . " Commentaires";
		} else {
			$nb = $nb . " Commentaire";
		}
		return $nb;
	}
	
	
	
}
?>


