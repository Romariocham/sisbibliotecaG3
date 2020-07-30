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
    public function formulario(){
        $this->load->view('header');
        $this->load->view('usuarios/formulario');
        $this->load->view('footer');
    }
     public function insertar()
    {   
        $this->load->view('header');
        $this->load->view('usuarios/insertarusuario');
        $this->load->view('footer');
    }
    public function editarusuario(){
        $this->load->model('model_usuario');
        $result=  $this->model_usuario->consultar(); 
        $datos=array('usuario'=>$result); 
    {   $this->load->view('header');
        $this->load->view('usuarios/editarusuario', $datos);
        $this->load->view('footer');
    }
}

    public function guardar(){
        $usua_login =$this->input->post('usua_login');
        $usua_password =$this->input->post('usua_password');
        $usua_nombres =$this->input->post('usua_nombres');
        $usua_apellidos =$this->input->post('usua_apellidos');
        $usua_direccion =$this->input->post('usua_direccion');
        $usua_email =$this->input->post('usua_email');
        $usua_telefono =$this->input->post('usua_telefono');

        $this->load->model('model_usuario');
        $data=array(
            'usua_login'=>$usua_login,
            'usua_password'=>$usua_password,
            'usua_nombres' =>$usua_nombres,
            'usua_apellidos'=> $usua_apellidos,
            'usua_direccion' =>$usua_direccion,
            'usua_email' =>$usua_email,
            'usua_telefono'=>$usua_telefono
        );
        $this->model_usuario->guardar($data);
        redirect('Login');
        }
        
         public function guardar1(){
        $usua_login =$this->input->post('usua_login');
        $usua_password =$this->input->post('usua_password');
        $usua_nombres =$this->input->post('usua_nombres');
        $usua_apellidos =$this->input->post('usua_apellidos');
        $usua_direccion =$this->input->post('usua_direccion');
        $usua_email =$this->input->post('usua_email');
        $usua_telefono =$this->input->post('usua_telefono');

        $this->load->model('model_usuario');
        $data=array(
            'usua_login'=>$usua_login,
            'usua_password'=>$usua_password,
            'usua_nombres' =>$usua_nombres,
            'usua_apellidos'=> $usua_apellidos,
            'usua_direccion' =>$usua_direccion,
            'usua_email' =>$usua_email,
            'usua_telefono'=>$usua_telefono
        );
        $this->model_usuario->guardar($data);
        redirect('Welcome/confidencial2');
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
    public function eliminar(){
            $this->load->view('header');
            $this->load->model('model_usuario');
            $id =$this->input->get('usua_id');
            $this->model_usuario->eliminar($id);
            $this->load->view('footer');
            redirect('Welcome/confidencial2');       
        }
    
    public function editar(){
    $this->load->model('model_usuario');
    $id =$this->input->get('usua_id');
    $obtenerEnlace=$this->model_usuario->obtenerEnlace($id);

        if($obtenerEnlace!=FALSE){
            foreach($obtenerEnlace->result() as$row){
                $usua_login=$row->usua_login;
                $usua_password=$row->usua_password;
                $nombres=$row->usua_nombres;
                $apellidos=$row->usua_apellidos;
                $direccion=$row->usua_direccion;
                $email=$row->usua_email;
                $telefono=$row->usua_telefono;
                
            }
            $data=array(
                'iduser'=>$id,
                'username'=>$usua_login,
                'userpassword'=>$usua_password,
                'usernombres'=>$nombres,
                'userapellidos'=>$apellidos,
                'userdireccion'=>$direccion,
                'useremail'=>$email,
                'usertelefono'=>$telefono,); 

        }else{
            return FALSE;
        }
        $this->load->view('header');
        $this->load->view('usuarios/editarusuario',$data);
        $this->load->view('footer');

    }
     public function editarRegistro(){
            $this->load->view('header');
            $this->load->model('model_usuario');

            $id=$this->uri->segment(3);
 
            $data =array(
            'usua_login'=>$this->input->post('usua_login',true),
            'usua_password'=>$this->input->post('usua_password',true),
            'usua_nombres'=>$this->input->post('usua_nombres',true),
            'usua_apellidos'=>$this->input->post('usua_apellidos',true),
            'usua_direccion'=>$this->input->post('usua_direccion',true),
            'usua_email'=>$this->input->post('usua_email',true),
            'usua_telefono'=>$this->input->post('usua_telefono',true)
            );
            $this->model_usuario->editarRegistro($id,$data);
            redirect('Welcome/confidencial2');
        }


    public function salir(){
        $this->session->sess_destroy();
        redirect();
    }
}