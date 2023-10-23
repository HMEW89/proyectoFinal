<?php
    class Prestacion_model extends CI_Model{
        public function listaprestaciones(){
            $this->db->select('*');
            $this->db->from('prestacion');
             return $this->db->get();
        }
        /*public function agregarprestacion($data){
            $this->db->insert('prestacion',$data);
            $this->db->from('prestacion');
             return $this->db->get();
        }*/
        public function insertarPrestacion($data) {
            $this->db->insert('prestacion', $data);
    
            // Devuelve el ID de la prestación insertada
            return $this->db->insert_id();
        }
        public function insertarDetalle($data) {
            $this->db->insert('detalle', $data);
        }
        public function agregarPrestacion($data) {
            $this->db->insert('prestacion', $data);
            return $this->db->insert_id();
        }
    
        public function agregarDetalle($data) {
            $this->db->insert('detalle', $data);
        }
        public function eliminarprestacion($id){
            $this->db->where('id',$id);
            $this->db->delete('prestacion');
        }
        public function recuperarprestacion($id){
            $this->db->select('*');
            $this->db->from('prestacion');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificarprestacion($id, $data){
            $this->db->where('id',$id);
            $this->db->update('prestacion', $data);
        }
        public function buscarClientePorCarnet($ciNit) {
    
        $this->db->select('razonSocial'); // Selecciona las columnas que deseas obtener
        $this->db->from('solicitante');
        $this->db->where('ciNit', $ciNit);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row_array(); // Devuelve el primer resultado como un arreglo asociativo
        } else {
            return null; // Si no se encuentra el cliente, devuelve null
        }
    }
    }
?>