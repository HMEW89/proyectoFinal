<?php
    class Miembro_model extends CI_Model{
        public function listamiembros(){
            $this->db->select('*');
            $this->db->from('miembro');
             return $this->db->get();
        }
        public function agregarmiembro($data){
            $this->db->insert('miembro',$data);
            $this->db->from('miembro');
             return $this->db->get();
        }
        public function eliminarmiembro($id){
            $this->db->where('id',$id);
            $this->db->delete('miembro');
        }
        public function recuperarmiembro($id){
            $this->db->select('*');
            $this->db->from('miembro');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificarmiembro($id, $data){
            $this->db->where('id',$id);
            $this->db->update('miembro', $data);
        }
    }
?>