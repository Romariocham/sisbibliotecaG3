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
		if($this->session->userdata('usua_esadmin')!=true){
			$this->load->view('header');
			$this->load->view('usuarios/menusuario');
			$this->load->view('welcome_message_usuario');
			$this->load->view('footer');
		}
		else {
			$this->load->view('header');
			$this->load->view('usuarios/menuadmin');
			$this->load->view('welcome_message');
			$this->load->view('footer');
		}
	
	}
	public function confidencial(){
		if($this->session->userdata('auth')!=true) die("ascesso denegado");{
			$idp=$this->session->userdata('usua_id');
		    $data['usuario'] = $this->db->query("SELECT * FROM usuario WHERE usua_id='{$idp}'")->row();
			$this->load->view('header');
		    $this->load->view('usuarios/menuadmin');
			$this->load->view('confidencial',$data);
		    $this->load->view('footer');
	   }
	}
	public function confidencial2(){
		if($this->session->userdata('auth')!=true) die("ascesso denegado");
		//if($this->session->userdata('id')!=1) die("ascesso denegado");
		
		    $data['usuario'] = $this->db->query("SELECT * FROM usuario")->result();
			$this->load->view('header');
		    $this->load->view('usuarios/menuadmin');
			$this->load->view('confidencial2',$data);
		    $this->load->view('footer');
	   
    }

}

