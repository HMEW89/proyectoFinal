<?php
    class Evento_model extends CI_Model{
        public function listaeventos(){
            $this->db->select('*');
            $this->db->from('evento');
             return $this->db->get();
        }
        public function agregarevento($data){
            $this->db->insert('evento',$data);
            $this->db->from('evento');
             return $this->db->get();
        }
        public function eliminarevento($id){
            $this->db->where('id',$id);
            $this->db->delete('evento');
        }
        public function recuperarevento($id){
            $this->db->select('*');
            $this->db->from('evento');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificarevento($id, $data){
            $this->db->where('id',$id);
            $this->db->update('evento', $data);
        }
    }
?>