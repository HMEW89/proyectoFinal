<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miembro extends CI_Controller {

	public function index()
	{
		$lista=$this->miembro_model->listamiembros();
		$data['miembro']=$lista;

        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/miembro/miembro_list',$data);
        $this->load->view('estructura/footer');
		
	}
    public function agregar()
	{
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/miembro/miembro_form');
        $this->load->view('estructura/footer');
		
	}
    public function agregarbd()
	{
		$data['ci']=$_POST['carnet'];
        $data['nombres']=$_POST['nombres'];
        $data['primerApellido']=$_POST['primerApellido'];
        $data['segundoApellido']=$_POST['segundoApellido'];
        $data['telefono']=$_POST['telefono'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->miembro_model->agregarmiembro($data);

        redirect('miembro/index','refresh');
	}
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->miembro_model->eliminarmiembro($id);

        redirect('miembro/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infomiembro']=$this->miembro_model->recuperarmiembro($id);
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/miembro/miembro_modif',$data);
        $this->load->view('estructura/footer');
        
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['ci']=$_POST['carnet'];
        $data['nombres']=$_POST['nombres'];
        $data['primerApellido']=$_POST['primerApellido'];
        $data['segundoApellido']=$_POST['segundoApellido'];
        $data['telefono']=$_POST['telefono'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->miembro_model->modificarmiembro($id, $data);

        redirect('miembro/index','refresh');
	}

}