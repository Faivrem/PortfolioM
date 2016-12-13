<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	
	public function index(){
		$this->load->helper('url');
		$this->load->helper('assets');
		$this->load->view('blogView');
	}
	
	public function article($page=''){
		$this->load->helper('url');
		$this->load->helper('assets');
		if ($page==''){
			/*
			$this->load->model('Commentaire','com');
			$res=$this->com->liste_Q();
			foreach($res as $line){
			echo $line->pseudo;
			}
			//$resultat=$this->com->ajouter_commentaireQ('maxime','wsh','1');*/
			//var_dump($resultat);
			
			$this->load->view('blogView');
		}
		else {
		$this->load->view('articleB/'.$page);
		}
	}
}