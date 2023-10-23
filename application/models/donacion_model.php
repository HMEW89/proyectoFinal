<?php
    class Donacion_model extends CI_Model{
        public function listadonacion(){
            $this->db->select('*');
            $this->db->from('donacion');
             return $this->db->get();
        }
        public function agregardonacion($data){
            $this->db->insert('donacion',$data);
            $this->db->from('donacion');
             return $this->db->get();
        }
        public function eliminardonacion($id){
            $this->db->where('id',$id);
            $this->db->delete('donacion');
        }
        public function recuperardonacion($id){
            $this->db->select('*');
            $this->db->from('donacion');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificardonacion($id, $data){
            $this->db->where('id',$id);
            $this->db->update('donacion', $data);
        }
    }
?>