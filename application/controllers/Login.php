<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->view('header');
        $this->load->view('login');
        $this->load->view('footer');
    }
    
    public function evaluar(){
        $usuario = $this->input->post('usuario');
        $password = $this->input->post('password');

        $result=$this->db->query("SELECT *FROM persona WHERE usuario='{$usuario}' AND password ='{$password}'");
        if($result -> num_rows()>0){
            $row = $result->row();
            echo "bienvenido {$row->usuario}";
            $data=array('user'=>$row->usuario,'id'=>$row->id,'auth'=>true);
            $this->session->set_userdata($data);
            redirect();

        }else{
            echo "incorrecto";
        }
    }

    public function salir(){
        $this->session->sess_destroy();
        redirect();
    }
    public function mostrar(){
        if($this->session->userdata('auth')==true){
            echo "informacion confidencial";
        }else{
            echo "no tienes prvilegios para ver esta informacion";
        }
        
    }
}