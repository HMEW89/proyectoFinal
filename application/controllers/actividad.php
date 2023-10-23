<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actividad extends CI_Controller {

	public function index()
	{
		$lista=$this->actividad_model->listaactividades();
		$data['actividad']=$lista;
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/actividad/actividad_list',$data);
        $this->load->view('estructura/footer');
		
	}
    public function agregar()
	{
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/actividad/actividad_form');
        $this->load->view('estructura/footer');
		
	}
    public function agregarbd()
	{
        $data['nombre']=$_POST['nombre'];
        $data['descripcion']=$_POST['descripcion'];
        $data['horaInicio']=$_POST['horaInicio'];
        $data['horaFin']=$_POST['horaFin'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->actividad_model->agregaractividad($data);

        redirect('actividad/index','refresh');
	}
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->actividad_model->eliminaractividad($id);

        redirect('actividad/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infoactividad']=$this->actividad_model->recuperaractividad($id);
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/actividad/actividad_modif',$data);
        $this->load->view('estructura/footer');
        
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['nombre']=$_POST['nombre'];
        $data['descripcion']=$_POST['descripcion'];
        $data['horaInicio']=$_POST['horaInicio'];
        $data['horaFin']=$_POST['horaFin'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->actividad_model->modificaractividad($id, $data);

        redirect('actividad/index','refresh');
	}

}