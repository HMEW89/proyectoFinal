<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitante extends CI_Controller {

	public function index()
	{
		$lista=$this->solicitante_model->listasolicitantes();
		$data['solicitante']=$lista;

        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/solicitante/solicitante_list',$data);
        $this->load->view('estructura/footer');
	}
    public function agregar()
	{
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/solicitante/solicitante_form');
        $this->load->view('estructura/footer');
	}
    public function agregarbd()
	{
		$data['ciNit']=$_POST['carnet'];
        $data['razonSocial']=$_POST['nombres'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->solicitante_model->agregarsolicitante($data);

        redirect('solicitante/index','refresh');
	}
    public function agregar2bd()
	{
		$data['ciNit']=$_POST['carnet'];
        $data['razonSocial']=$_POST['nombres'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->solicitante_model->agregarsolicitante($data);

        redirect('solicitante/index2','refresh');
	}
    public function index2()
	{
		$lista=$this->solicitante_model->listasolicitantes();
		$data['solicitante']=$lista;


        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/prestacion/prestacion_form');
        $this->load->view('estructura/footer');
	}
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->solicitante_model->eliminarsolicitante($id);

        redirect('solicitante/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infosolicitante']=$this->solicitante_model->recuperarsolicitante($id);

        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/solicitante/solicitante_modif',$data);
        $this->load->view('estructura/footer');
        
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['ciNit']=$_POST['carnet'];
        $data['razonSocial']=$_POST['nombres'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->solicitante_model->modificarsolicitante($id, $data);

        redirect('solicitante/index','refresh');
	}
    public function buscar() {
        $ciNit = $this->input->post('ciNit');
        $razonSocial = $this->solicitante_model->buscar_por_ci($ciNit);
               
        echo json_encode($razonSocial);
    }
    public function obtener_razon_social() {
        // Obtiene el valor del CI enviado a través de la solicitud POST
        $ciNit = $this->input->post('ciNit');
    
        // Realiza una consulta en la base de datos para obtener la razón social según el CI
        $razonSocial = $this->solicitante_model->obtener_razon_social($ciNit);
    
        // Devuelve la razón social en formato JSON
        echo json_encode($razonSocial);
    }

}