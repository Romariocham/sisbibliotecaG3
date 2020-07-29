<?php 
class Model_usuario extends CI_Model {


        public function consultar()
        {
                $query = $this->db->get('persona', 10);
                return $query->result();

        }

       public function  guardar($data){
       	$this->db->insert('persona',$data);
       }
       
       public function eliminar($id)
		{

			return $this->db->query("DELETE FROM persona WHERE id='$id'");


		}

        public function obtenerEnlace($id){
            $this->db->where('id',$id);
            $query=$this->db->get('persona');
            if($query->num_rows()>0){

                return $query;
            }else{
                return FALSE;
            }
        }

        public function editarRegistro($id,$data){
        	
            	$this->db->where('id',$id);
                $this->db->update('persona',$data);
                
              
        }
      

}

?>