<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio extends CI_Controller {

	public function index()
	{
		$lista=$this->servicio_model->listaservicios();
		$data['servicio']=$lista;

        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/servicio/serv_lista',$data);
        $this->load->view('estructura/footer');
	}
    public function agregar()
	{
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/servicio/serv_form');
        $this->load->view('estructura/footer');
		
	}
    public function agregarbd()
	{
        $data['nombre']=$_POST['nombre'];
        $data['precio']=$_POST['costo'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->servicio_model->agregarservicio($data);

        redirect('servicio/index','refresh');
	}
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->servicio_model->eliminarservicio($id);

        redirect('servicio/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infoservicio']=$this->servicio_model->recuperarservicio($id);
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/servicio/serv_modif',$data);
        $this->load->view('estructura/footer');
        
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['nombre']=$_POST['nombre'];
        $data['precio']=$_POST['costo'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->servicio_model->modificarservicio($id, $data);

        redirect('servicio/index','refresh');
	}
    public function buscar() {
        $nombre = $this->input->post('nombre');
        $servicios = $this->servicio_model->buscar_servicio($nombre);
               
        echo json_encode($servicios);
    }

}