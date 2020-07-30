<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplar extends CI_Controller {

     function __construct(){
        parent::__construct();
        
        if($this->session->userdata('auth')!=true){
                redirect('Login');
                dic("");
        };
    }

    
    public function index()
    {
        $data['ejemplar'] = $this->db->query("SELECT * FROM ejemplar")->result();
        if($this->session->userdata('usua_esadmin')!=true){
            $this->load->view('header');
            $this->load->view('usuarios/menusuario');
            $this->load->view('ejemplares/listejempusuer',$data);
            $this->load->view('footer');
        }
        else {
            $this->load->view('header');
            $this->load->view('usuarios/menuadmin');
            $this->load->view('ejemplares/listejempadmin',$data);
            $this->load->view('footer');
        }
    }
    public function insertar(){
        $this->load->view('header');
        $this->load->view('ejemplares/insertarejemplar');
        $this->load->view('footer');
    }

    public function listaejemplar()
    {   
        $data['ejemplar'] = $this->db->query("SELECT * FROM ejemplar")->result();
            $this->load->view('header');
            $this->load->view('usuarios/menuadmin');
            $this->load->view('ejemplares/listejempadmin',$data);
            $this->load->view('footer');
    }
    public function listaejemplar1()
    {
        $data['ejemplar'] = $this->db->query("SELECT * FROM ejemplar")->result();
            $this->load->view('header');
            $this->load->view('usuarios/menusuario');
            $this->load->view('ejemplares/listejempuser',$data);
            $this->load->view('footer');
    }

    public function editarejemplar(){
        $this->load->model('model_ejemplar');
        $result=  $this->model_ejemplar->consultar(); 
        $datos=array('ejemplar'=>$result); 
    {   $this->load->view('header');
        $this->load->view('ejemplares/editarejemplar', $datos);
        $this->load->view('footer');
    }
}

    public function guardar(){
        $ejem_titulo =$this->input->post('ejem_titulo');
        $ejem_editorial =$this->input->post('ejem_editorial');
        $ejem_anio =$this->input->post('ejem_anio');
        $ejem_pagina =$this->input->post('ejem_paginas');

        $this->load->model('model_ejemplar');
        $data=array(
            'ejem_titulo'=>$ejem_titulo,
            'ejem_editorial'=>$ejem_editorial,
            'ejem_anio'=>$ejem_anio,
            'ejem_paginas'=>$ejem_pagina,
        );
        $this->model_ejemplar->guardar($data);
        redirect('Ejemplar/listaejemplar');
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
            $this->load->model('model_ejemplar');
            $id =$this->input->get('ejem_id');
            $this->model_ejemplar->eliminar($id);
            $this->load->view('footer');
            redirect('Ejemplar/listaejemplar');       
        }
    
    public function editar(){
        $this->load->model('model_ejemplar');
        $id =$this->input->get('ejem_id');
        $obtenerEnlace=$this->model_ejemplar->obtenerEnlace($id);

        if($obtenerEnlace!=FALSE){
            foreach($obtenerEnlace->result() as$row){
                $ejem_titulo=$row->ejem_titulo;
                $ejem_editorial=$row->ejem_editorial;
                $ejem_anio=$row->ejem_anio;
                $ejem_pagina=$row->ejem_paginas;
                }
            $data=array(
                'ejem_id'=>$id,
                'ejem_titulo'=>$ejem_titulo,
                'ejem_editorial'=>$ejem_editorial, 
                'ejem_anio'=>$ejem_anio, 
                'ejem_paginas'=>$ejem_pagina);  

        }else{
            return FALSE;
        }
        $this->load->view('header');
        $this->load->view('ejemplares/editarejemplar',$data);
        $this->load->view('footer');

    }
     public function editarRegistro(){
            $this->load->view('header');
            $this->load->model('model_ejemplar');

            $id=$this->uri->segment(3);
            $data =array(
            'ejem_titulo'=>$this->input->post('ejem_titulo',true),
            'ejem_editorial'=>$this->input->post('ejem_editorial',true),
            'ejem_anio'=>$this->input->post('ejem_anio',true),
            'ejem_paginas'=>$this->input->post('ejem_paginas',true)
            );
            $this->model_ejemplar->editarRegistro($id,$data);
            redirect('Ejemplar/listaejemplar');
        }

}