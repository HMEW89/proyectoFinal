<?php
    class Servicio_model extends CI_Model{
        public function listaservicios(){
            $this->db->select('*');
            $this->db->from('servicio');
             return $this->db->get();
        }
        public function agregarservicio($data){
            $this->db->insert('servicio',$data);
            $this->db->from('servicio');
             return $this->db->get();
        }
        public function eliminarservicio($id){
            $this->db->where('id',$id);
            $this->db->delete('servicio');
        }
        public function recuperarservicio($id){
            $this->db->select('*');
            $this->db->from('servicio');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificarservicio($id, $data){
            $this->db->where('id',$id);
            $this->db->update('servicio', $data);
        }
        public function buscar_servicio($nombre) {
            $this->db->like('nombre',$nombre);
            $query=$this->db->get('servicio');
            return $query->result();
        }
    }
?>