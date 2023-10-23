<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestacion extends CI_Controller {

	public function index()
	{
		$lista=$this->prestacion_model->listaprestaciones();
		$data['prestacion']=$lista;

        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/prestacion/prestacion_list',$data);
        $this->load->view('estructura/footer');
		
	}
    public function agregar()
	{
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/prestacion/prestacion_form');
        $this->load->view('estructura/footer');
	}
    public function agregarbd()
	{
        $data['fecha']=$_POST['fecha'];
        $data['total']=$_POST['total'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->prestacion_model->agregarprestacion($data);

        redirect('prestacion/index','refresh');
	}
    
    public function nuevaPrestacion() {
        // Obtener los datos del formulario
       // $fecha = $_POST['fecha'];
        date_default_timezone_set('America/La_Paz');
        $fecha_actual = date('Y-m-d ');

        $total = floatval($this->input->post('total'));


        // Obtén los datos del formulario

        $data = array(
            'idSolicitante' => $this->input->post('idSolicitante'),
            'idUsuario' => $this->input->post('idUsuario'),
            'fecha' => $fecha_actual,
            'total' => number_format($total, 2, '.', '')
            
        );

        // Inserta los datos de la prestación en la tabla "Prestacion"
        $idPrestacion = $this->prestacion_model->insertarPrestacion($data);

        if ($idPrestacion) {
            // Ahora, procesa los detalles de la prestación, que pueden ser múltiples
            $idServicio = $this->input->post('idServicio');
            $fecha2 = $this->input->post('fecha2');
            $fechaHora=date('Y-m-d H:i:s', strtotime($fecha2));
            $cantidad = $this->input->post('cantidad');
            $costo = $this->input->post('costo');
            $observacion = $this->input->post('observacion');

            for ($i = 0; $i < count($idServicio); $i++) {
                $detalleData = array(
                    'idPrestacion' => $idPrestacion,
                    'idServicio' => $idServicio[$i],
                    'fechaHora' => $fechaHora[$i],
                    'cantidad' => $cantidad[$i],
                    'precio' => $costo[$i],
                    'observacion' => $observacion[$i]
                );

                // Inserta los datos del detalle en la tabla "Detalle"
                $this->prestacion_model->insertarDetalle($detalleData);
            }

            // Redirige o muestra una vista de éxito, etc.
            redirect('prestacion/index','refresh');
        } else {
            // Maneja el error de inserción en la tabla "Prestacion"
            $this->load->view('prestacion/agregar');
        }
    }
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->prestacion_model->eliminarprestacion($id);

        redirect('prestacion/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infoprestacion']=$this->prestacion_model->recuperarprestacion($id);
        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/prestacion/prestacion_modif',$data);
        $this->load->view('estructura/footer');
        
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['fecha']=$_POST['fecha'];
        $data['total']=$_POST['total'];
        $data['idUsuario']=$_POST['idUsuario'];

        $this->prestacion_model->modificarprestacion($id, $data);

        redirect('prestacion/index','refresh');
	}
    public function buscar() {
        $ciNit = $_POST['buscarSolicitante']; // Obtener el carnet del formulario
        
        $solicitante = $this->prestacion_model->buscarClientePorCarnet($ciNit);
        
        // Enviar los datos del cliente a la vista
        $data['prestacion'] = $solicitante ;

        $this->load->view('estructura/cabecera');
        $this->load->view('administrador/prestacion/prestacion_form', $data);
        $this->load->view('estructura/footer');
        
        
    }

    public function buscarSolicitante() {
        $ciNit = $this->input->post('ciNit');

        // Llamar al modelo de Solicitante para buscar al solicitante por CI/NIT
        $this->load->model('Solicitante_model');
        $razonSocial = $this->solicitante_model->obtenerRazonSocialPorCI($ciNit);

        // Devolver la respuesta, por ejemplo, como JSON
        $response = array('razonSocial' => $razonSocial);
        echo json_encode($response);
    }

    public function buscarServicio() {
        $nombreServicio = $this->input->post('nombreServicio');

        // Llamar al modelo de Servicio para buscar el servicio por nombre
        $this->load->model('Servicio_model');
        $servicio = $this->servicio_model->buscarServicioPorNombre($nombreServicio);

        // Devolver la respuesta, por ejemplo, como JSON
        $response = array('nombre' => $nombreServicio);
        echo json_encode($response);
    }

}