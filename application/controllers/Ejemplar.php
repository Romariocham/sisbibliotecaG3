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
/*00x------------- Funciones que tienes que ver exclusicamente con la creación de nuevos ejemplares(libro)-----inicio ----*/

    public function insertar(){
        $this->load->helper('form'); //cargando el helper_form
        $this->load->model('model_categoria');
        $opciones=$this->model_categoria->getCategorias();    
        $data=array('opciones'=>$opciones);  //$pasando['filas']=$rows;
        $this->load->view('header');
        $this->load->view('ejemplares/insertarejemplar',$data);
        $this->load->view('footer');
    }

    public function guardar(){
        $ejem_titulo =$this->input->post('ejem_titulo');
        $ejem_editorial =$this->input->post('ejem_editorial');
        $ejem_anio =$this->input->post('ejem_anio');
        $ejem_pagina =$this->input->post('ejem_paginas');
        $ejem_cate_id =$this->input->post('ejem_cate_id');
        $data=array(
                   'ejem_titulo'=>$ejem_titulo,
                   'ejem_editorial'=>$ejem_editorial,
                   'ejem_anio'=>$ejem_anio,
                   'ejem_paginas'=>$ejem_pagina,
                   'ejem_cate_id'=>$ejem_cate_id,
               );
        /*00x-------------------------form validation inicio---------------------------*/
        $this->load->helper(array('form', 'url')); //esta cargando el form hepler y el url helper
        $this->load->library('form_validation');

               $config  = array(            
               array(
                        'field' => 'ejem_titulo',
                        'label' => 'Titulo',
                        'rules' => 'required|min_length[2]|max_length[30]|is_unique[ejemplar.ejem_titulo]',
                        'errors' => array(
                               'required'      => 'necesitas ingresar un %s.',
                               'min_length'     => 'el {field} debe tener almenos {param} caracteres.',//'el %s debe tener almenos 5 digitos.'
                               'max_length'     => 'el {field} debe tener menos de {param} caracteres.',
                               'is_unique' =>   'El {field} ya existe..'),
                ),

                array(
                        'field' => 'ejem_editorial',
                        'label' => 'Editorial',
                        'rules' => 'required|min_length[2]|max_length[30]',
                        'errors' => array(
                               'required'      => 'necesitas ingresar un %s.',
                               'min_length'     => 'el {field} debe tener almenos {param} caracteres.',//'el %s debe tener almenos 5 digitos.'
                               'max_length'     => 'el {field} debe tener menos de {param} caracteres.'),
                ),
                 array(
                        'field' => 'ejem_anio',
                        'label' => 'Año',
                        'rules' => 'required|min_length[2]|max_length[30]',
                        'errors' => array(
                               'required'      => 'necesitas ingresar el %s del libro.',
                               'min_length'     => 'el {field} debe tener almenos {param} digitos.',//'el %s debe tener almenos 5 digitos.'
                               'max_length'     => 'el {field} debe tener menos de {param} digitos.'),
                ),
                 array(
                        'field' => 'ejem_paginas',
                        'label' => 'paginas',
                        'rules' => 'required|min_length[2]|max_length[30]',
                        'errors' => array(
                               'required'      => 'necesitas ingresar la cantidad de %s.',
                               'min_length'     => 'las {field} debe tener almenos {param} digitos.',//'el %s debe tener almenos 5 digitos.'
                               'max_length'     => 'las {field} debe tener menos de {param} digitos.'),
                ),
               
                                    
                            );
        $this->form_validation->set_rules($config);
        $this->load->model('model_ejemplar');
                 if ($this->form_validation->run() == FALSE){  
                    $this->load->helper('form'); //cargando el helper_form
                    $this->load->model('model_categoria');
                    $opciones=$this->model_categoria->getCategorias();    

                    $data=array('opciones'=>$opciones);  //$pasando['filas']=$rows;
                    $this->load->view('header');
                    $this->load->view('ejemplares/insertarejemplar',$data);
                    $this->load->view('footer');
                         
                }else{              
                    $this->model_ejemplar->guardar($data);             
                    redirect('ejemplar/listaejemplar');
                    //$this->load->view('borrador_2_mensaje_exito');
                }

    }
        /*00x-------------------------form validation final ---------------------------*/

/*00x-------------Funciones que tienes que ver exclusicamente con la creación de nuevos ejemplares(libro)-----final----*/

    public function listaejemplar()//modificado 00x
    {   
        //$data['ejemplar'] = $this->db->query("SELECT * FROM ejemplar")->result();
        $data['ejemplar']=$this->db->query("SELECT * FROM  ejemplar,categoria WHERE ejem_cate_id=cate_id")->result();

            $this->load->view('header');
            $this->load->view('usuarios/menuadmin');
            $this->load->view('ejemplares/listejempadmin',$data);
            $this->load->view('footer');
    }
    public function listaejemplar1()
    {
        //$data['ejemplar'] = $this->db->query("SELECT * FROM ejemplar")->result();
        $data['ejemplar']=$this->db->query("SELECT * FROM  ejemplar,categoria WHERE ejem_cate_id=cate_id")->result();
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