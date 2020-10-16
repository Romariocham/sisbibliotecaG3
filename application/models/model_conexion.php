<?php 
class Model_conexion  extends CI_Model {
	public function consultar(){
		        $mysqli = new mysqli("localhost","root","","sisbibliotecag3"); 
		        return $mysqli;
				if(mysqli_connect_errno()){
				echo 'Conexion Fallida : ', mysqli_connect_error();
				exit();
			};
        }
    }
?>