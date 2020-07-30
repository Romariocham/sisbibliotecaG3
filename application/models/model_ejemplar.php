<?php 
class Model_ejemplar extends CI_Model {


        public function consultar()
        {
                $query = $this->db->get('ejemplar', 10);
                return $query->result();

        }

       public function  guardar($data){
       	$this->db->insert('ejemplar',$data);
       }
       
       public function eliminar($id)
		{

			return $this->db->query("DELETE FROM ejemplar WHERE ejem_id='$id'");
		}

        public function obtenerEnlace($id){
            $this->db->where('ejem_id',$id);
            $query=$this->db->get('ejemplar');
            if($query->num_rows()>0){
                return $query;
            }else{
                return FALSE;
            }
        }

        public function editarRegistro($id,$data){
        	
            	$this->db->where('ejem_id',$id);
                $this->db->update('ejemplar',$data);
                
              
        }
}

?>