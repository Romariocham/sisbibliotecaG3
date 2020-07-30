<?php 
class Model_categoria extends CI_Model {


        public function consultar()
        {
                $query = $this->db->get('categoria', 10);
                return $query->result();

        }

       public function  guardar($data){
       	$this->db->insert('categoria',$data);
       }
       
       public function eliminar($id)
		{

			return $this->db->query("DELETE FROM categoria WHERE cate_id='$id'");
		}

        public function obtenerEnlace($id){
            $this->db->where('cate_id',$id);
            $query=$this->db->get('categoria');
            if($query->num_rows()>0){
                return $query;
            }else{
                return FALSE;
            }
        }

        public function editarRegistro($id,$data){
        	
            	$this->db->where('cate_id',$id);
                $this->db->update('categoria',$data);
                
              
        }
}

?>