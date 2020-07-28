<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	 function __construct(){
		parent::__construct();
		
		
		if($this->session->userdata('auth')!=true){
				redirect('Login');
				dic("");
		};
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('welcome_message');
		$this->load->view('footer');
		
	}
	public function confidencial(){
		
		if($this->session->userdata('auth')!=true) die("ascesso denegado");{
			$idp=$this->session->userdata('id');
		    $data['persona'] = $this->db->query("SELECT * FROM persona WHERE id='{$idp}'")->row();
			$this->load->view('header');
		    $this->load->view('menu');
			$this->load->view('confidencial',$data);
		    $this->load->view('footer');
	   }
	}
	public function confidencial2(){
		
		if($this->session->userdata('auth')!=true) die("ascesso denegado");
		if($this->session->userdata('id')!=1) die("ascesso denegado");
		
		    $data['persona'] = $this->db->query("SELECT * FROM persona")->result();
			$this->load->view('header');
		    $this->load->view('menu');
			$this->load->view('confidencial2',$data);
		    $this->load->view('footer');
	   
    }
}

