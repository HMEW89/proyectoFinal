<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public function index()
	{
		$lista=$this->reservacion_model->listareservaciones();
		$data['reservaciones']=$lista;

		$this->load->view('estructura/cabecera');
		$this->load->view('estructura/menu');
		$this->load->view('inicio', $data);
		$this->load->view('estructura/pie_pagina');
	}
	
	public function resumen()
	{
		$this->load->view('estructura/cabecera');
		$this->load->view('estructura/menu');
		$this->load->view('resumen');
		$this->load->view('estructura/pie_pagina');
	}
	
	public function objetivos()
	{
		$this->load->view('estructura/cabecera');
		$this->load->view('estructura/menu');
		$this->load->view('objetivos');
		$this->load->view('estructura/pie_pagina');
	}
	public function pruebabd()
	{
		$query=$this->db->get('reservaciones');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}
}
