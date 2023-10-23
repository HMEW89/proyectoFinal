<?php
    class Actividad_model extends CI_Model{
        public function listaactividades(){
            $this->db->select('*');
            $this->db->from('actividad');
             return $this->db->get();
        }
        public function agregaractividad($data){
            $this->db->insert('actividad',$data);
            $this->db->from('actividad');
             return $this->db->get();
        }
        public function eliminaractividad($id){
            $this->db->where('id',$id);
            $this->db->delete('actividad');
        }
        public function recuperaractividad($id){
            $this->db->select('*');
            $this->db->from('actividad');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificaractividad($id, $data){
            $this->db->where('id',$id);
            $this->db->update('actividad', $data);
        }
    }
?>