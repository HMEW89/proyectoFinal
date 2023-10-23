<?php
    class Solicitante_model extends CI_Model{
        public function listasolicitantes(){
            $this->db->select('*');
            $this->db->from('solicitante');
             return $this->db->get();
        }
        public function agregarsolicitante($data){
            $this->db->insert('solicitante',$data);
            $this->db->from('solicitante');
             return $this->db->get();
        }
        public function eliminarsolicitante($id){
            $this->db->where('id',$id);
            $this->db->delete('solicitante');
        }
        public function recuperarsolicitante($id){
            $this->db->select('*');
            $this->db->from('solicitante');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificarsolicitante($id, $data){
            $this->db->where('id',$id);
            $this->db->update('solicitante', $data);
        }
        public function buscar_por_ci($ci) {
            
            $this->db->like('ciNit', $ci);
            $query = $this->db->get('solicitante');
            return $query->result();
            
        }
        public function obtener_razon_social($ci) {
            // Realiza una consulta en la base de datos para obtener la razón social según el CI
            $this->db->select('razonSocial');
            $this->db->where('ciNit', $ci);
            $query = $this->db->get('solicitante');
    
            if ($query->num_rows() > 0) {
                $row = $query->row();
                return $row->razonSocial;
            } else {
                return 'no existe'; // Devuelve una cadena vacía si no se encuentra la razón social
            }
        }
        
    }
?>