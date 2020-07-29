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
         $usua_login = $this->input->post('usua_login');
         $usua_password = $this->input->post('usua_password');
         $usua_esadmin = $this->input->get('usua_esadmin');

       
         $result=$this->db->query("SELECT *FROM usuario WHERE usua_login='{$usua_login}' AND usua_password ='{$usua_password}'");
          $result2=$this->db->query("SELECT *FROM usuario WHERE usua_esadmin='{$usua_esadmin}'");
        if($result -> num_rows()>0){
             $row = $result->row();
              echo "bienvenido {$row->usua_login}";
              $data=array('usua_login'=>$row->usua_login,'usua_esadmin'=>$row->usua_esadmin,'auth'=>true);
             $this->session->set_userdata($data);
                redirect();      
        }else{

            echo "incorrecto";
            redirect('Login');

        }
    }
    public function formulario()
    {   $this->load->view('header');
        $this->load->view('usuarios/formulario');
        $this->load->view('footer');
    }
    
    public function guardar(){
        $usua_login =$this->input->post('usua_login');
        $usua_password =$this->input->post('usua_password');

        $this->load->model('model_usuario');
        $data=array(
            'usua_login'=>$usua_login,
            'usua_password'=>$usua_password);

        $this->model_usuario->guardar($data);
        redirect('Login');
        }


    public function salir(){
        $this->session->sess_destroy();
        redirect();
    }
    /*
    public function mostrar(){
        if($this->session->userdata('auth')==true){
            echo "informacion confidencial";
        }else{
            echo "no tienes prvilegios para ver esta informacion";
        }
        
    }
    */
}