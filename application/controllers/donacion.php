<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donacion extends CI_Controller {

	public function index()
	{
		$lista=$this->donacion_model->listadonaciones();
		$data['donacion']=$lista;
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/donacion/donacion_lista',$data);
        $this->load->view('estructura/footer');
		
	}
    public function agregar()
	{
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/donacion/donacion_form');
        $this->load->view('estructura/footer');
		
	}
    public function agregarbd()
	{
        $data['fecha']=$_POST['fecha'];
        $data['monto']=$_POST['monto'];
        $data['tipo']=$_POST['tipo'];
        $data['idMiembro']=$_POST['idMiembro'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->donacion_model->agregardonacion($data);

        redirect('donacion/index','refresh');
	}
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->donacion_model->eliminardonacion($id);

        redirect('donacion/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infodonacion']=$this->donacion_model->recuperardonacion($id);
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/donacion/donacion_modif',$data);
        $this->load->view('estructura/footer');
        
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['fecha']=$_POST['fecha'];
        $data['monto']=$_POST['monto'];
        $data['tipo']=$_POST['tipo'];
        $data['idMiembro']=$_POST['idMiembro'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->donacion_model->modificardonacion($id, $data);

        redirect('donacion/index','refresh');
	}

}