<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/welcome
	 * - or -
	 * http://example.com/index.php/welcome/index
	 * - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 *
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->view();
		/*$this->load->helper ( 'url' );
		$this->load->helper ( 'assets' );
		$data['liste_article']=$this->classArticle->liste_b();
		$this->load->view ( 'blogView' ,$data);*/
	}
	public function view($page = '') {
		$this->load->helper ( 'url' );
		$this->load->helper ( 'assets' );
		if ($page == '') {
			$data['liste_article']= $this->classArticle->liste_b();
			$this->load->view ( 'blogView' ,$data);

		} else {
			$article = $this->classArticle->get_blog ( $page );

			// Commentaire //
			$txt = $this->input->post ( 'txt' );
			$nom = $this->input->post ( 'nom' );

			$id = $article->idArticle;
			if (isset ( $txt ) && isset ($nom)) {
				$this->classCommentaire->ajouter_commentaireB ( $nom, $txt, $id );
			}

			// var_dump($this->input->post());
			$list = $this->classCommentaire->b_id ( $article->idArticle );
			$nb = $this->classCommentaire->count_b ( $article->idArticle );
			$nbre_article=$this->classArticle->countB();
			$alea=$this->classArticle->alea_b();
			$data ['article'] = $article;
			$data ['list_com'] = $list;
			$data ['nbre_com'] = $nb;
			$data['alea']=$alea;
			$data['nbre_article']=$nbre_article;
			$this->load->view ('ArticleBlog', $data );
		}
	}
}
