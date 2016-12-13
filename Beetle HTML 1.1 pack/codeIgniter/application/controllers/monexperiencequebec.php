<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class monexperiencequebec extends CI_Controller {

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
	public function index()
	{
		$this->Blog();
	}
	public function Blog($page=''){
	$this->load->helper('url');
	$this->load->helper('assets');
	if ($page==''){
	$this->load->view('blogQView');
	}
	else {
	$this->load->view('articleQ/'.$page);
	}
	}
	
	public function partir_au_quebec(){
	$this->load->helper('url');
	$this->load->helper('assets');
	$this->load->view('aller');
	}
	public function les_cours_a_l_UQO(){
	$this->load->helper('url');
	$this->load->helper('assets');
	$this->load->view('cours');
	}
}
