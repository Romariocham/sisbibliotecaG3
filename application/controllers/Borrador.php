
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Borrador extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url')); //esta cargando el form hepler y el url helper
                $this->load->library('form_validation');
                



        $config  = array(
         
           
              
               array(
                        'field' => 'username',
                        'label' => 'usuario',
                        'rules' => 'required|min_length[2]|max_length[12]|is_unique[usuario.usua_login]',
                        'errors' => array(
                               'required'      => 'necesitas ingresar un %s.',
                               'min_length'     => 'el {field} debe tener almenos {param} digitos.',//'el %s debe tener almenos 5 digitos.'
                               'max_length'     => 'el {field} debe tener menos de {param} digitos.',
                               'is_unique'     => 'This %s already exists.'),
                ),
                array(
                        'field' => 'password',
                        'label' => 'contraseña',
                        'rules' => 'required',
                        'errors' =>  array(
                                 'required' => 'debes proporcionar una %s.'),

                ),
                array(
                        'field' => 'passconf',
                        'label' => 'contraseña de confirmacion',
                        'rules' =>  'required|matches[password]',
                        'errors' => array(
                                'required' => 'debes proporcionar una %s.',
                                'matches' => 'El campo {field} no coincide con el campo {param}.'),
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email|is_unique[usuario.usua_email]',//users.email--conectando con la base de datos
                        'errors' => array(
                        'required' => 'debes proporcionar un %s.',
                        'valid_email' => 'debes proporcionar un %s valido.',
                        'is_unique' => 'El {field} ya existe..'),
                )
        
        

       

      
                             
                                );

                
$this->form_validation->set_rules($config);


                if ($this->form_validation->run('abc') == FALSE)
                {/*el metodo run() solo devuelve verdadero cuando se aplica con exito todas las reglas, en este caso las reglas no han sido aplicadas con exito*/
                        $this->load->view('borrador');
                }
                else
                {
                        $this->load->view('borrador_2_mensaje_exito');
                }
        }
}

?>
