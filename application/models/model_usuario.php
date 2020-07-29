<?php 
class Model_usuario extends CI_Model {


        public function consultar()
        {
                $query = $this->db->get('usuario', 10);
                return $query->result();

        }

       public function  guardar($data){
       	$this->db->insert('usuario',$data);
       }
       
       public function eliminar($id)
		{

			return $this->db->query("DELETE FROM usuario WHERE usua_id='$id'");
		}

        public function obtenerEnlace($id){
            $this->db->where('usua_id',$id);
            $query=$this->db->get('usua_login');
            if($query->num_rows()>0){

                return $query;
            }else{
                return FALSE;
            }
        }

        public function editarRegistro($id,$data){
        	
            	$this->db->where('usua_id',$id);
                $this->db->update('usua_login',$data);
                
              
        }
      

}

?>