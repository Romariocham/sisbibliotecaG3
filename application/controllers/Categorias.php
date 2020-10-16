<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

     function __construct(){
        parent::__construct();
        
        if($this->session->userdata('auth')!=true){
        redirect('Login');
        dic("");
        };
    }

    
	public function index()
	{
        $data['categoria'] = $this->db->query("SELECT * FROM categoria")->result();
        if($this->session->userdata('usua_esadmin')!=true){
            $this->load->view('header');
            $this->load->view('usuarios/menusuario');
            $this->load->view('categorias/listacatuser',$data);
            $this->load->view('footer');
        }
        else {            
            $this->load->view('header');
            $this->load->view('usuarios/menuadmin');
            $this->load->view('categorias/listacatadmin',$data);
            $this->load->view('footer');
        }
    }
    
    public function insertar(){
        $this->load->view('header');
        $this->load->view('usuarios/menuadmin');
        $this->load->view('categorias/insertar');
        $this->load->view('footer');
    }

    public function listacategoria()
    {   
        $data['categoria'] = $this->db->query("SELECT * FROM categoria")->result();

            $this->load->view('header');
            $this->load->view('usuarios/menuadmin');
            $this->load->view('categorias/listacatadmin',$data);
            $this->load->view('footer');

    }
    public function listacategoria1()
    {
        $data['categoria'] = $this->db->query("SELECT * FROM categoria")->result();

            $this->load->view('header');
            $this->load->view('usuarios/menusuario');
            $this->load->view('categorias/listacatuser',$data);
            $this->load->view('footer');
    }

    public function editarcategoria(){
        $this->load->model('model_categoria');
        $result=  $this->model_categoria->consultar(); 
        $datos=array('categoria'=>$result); 
    {   $this->load->view('header');
        $this->load->view('categorias/editarcategoria', $datos);
        $this->load->view('footer');
    }
}

    public function guardar(){
        $cate_nombre =$this->input->post('cate_nombre');

        $this->load->model('model_categoria');
        $data=array(
            'cate_nombre'=>$cate_nombre
        );
        $this->model_categoria->guardar($data);
        redirect('Categorias/listacategoria');
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
            $this->load->model('model_categoria');
            $id =$this->input->get('cate_id');
            $this->model_categoria->eliminar($id);
            $this->load->view('footer');
            redirect('Categorias/listacategoria');       
        }
    
    public function editar(){
        $this->load->model('model_categoria');
        $id =$this->input->get('cate_id');
        $obtenerEnlace=$this->model_categoria->obtenerEnlace($id);

        if($obtenerEnlace!=FALSE){
            foreach($obtenerEnlace->result() as$row){
                $cate_nombre=$row->cate_nombre;
                
            }
            $data=array(
                'idcate'=>$id,
                'usercate'=>$cate_nombre); 

        }else{
            return FALSE;
        }
        $this->load->view('header');
        $this->load->view('categorias/editarcategoria',$data);
        $this->load->view('footer');

    }
     public function editarRegistro(){
            $this->load->view('header');
            $this->load->model('model_categoria');

            $id=$this->uri->segment(3);
            $data =array(
            'cate_nombre'=>$this->input->post('cate_nombre',true)
            );
            $this->model_categoria->editarRegistro($id,$data);
            redirect('Categorias/listacategoria');
        }

}