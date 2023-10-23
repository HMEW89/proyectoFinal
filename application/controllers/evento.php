<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

	public function index()
	{
		$lista=$this->evento_model->listaeventos();
		$data['evento']=$lista;
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/evento/evento_list',$data);
        $this->load->view('estructura/footer');
		
	}
    public function agregar()
	{
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/evento/evento_form');
        $this->load->view('estructura/footer');
		
	}
    public function agregarbd()
	{
        $data['nombre']=$_POST['nombre'];
        $data['lugar']=$_POST['lugar'];
        $data['fechaHoraInicio']=$_POST['fechaHoraInicio'];
        $data['fechaHoraFin']=$_POST['fechaHoraFin'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->evento_model->agregarevento($data);

        redirect('evento/index','refresh');
	}
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->evento_model->eliminarevento($id);

        redirect('evento/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infoevento']=$this->evento_model->recuperarevento($id);
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/evento/evento_modif',$data);
        $this->load->view('estructura/footer');
        
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['nombre']=$_POST['nombre'];
        $data['lugar']=$_POST['lugar'];
        $data['fechaHoraInicio']=$_POST['fechaHoraInicio'];
        $data['fechaHoraFin']=$_POST['fechaHoraFin'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->evento_model->modificarevento($id, $data);

        redirect('evento/index','refresh');
	}

}