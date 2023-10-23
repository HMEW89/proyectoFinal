<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function index()
	{

		if($this->session->userdata('nombreUsuario'))
		{
			redirect('usuario/panel','refresh');			 
		}
		else
		{
			$data['msg']=$this->uri->segment(3);
			$this->load->view('login', $data);
		}
	}

	public function validarusuario()
	{
		$nombreUsuario=$_POST['nombreUsuario'];
		$contrasenia=md5($_POST['contrasenia']);

		$consulta=$this->usuario_model->validar($nombreUsuario,$contrasenia);     //consulta a BD

		if($consulta->num_rows()>0)
		{
			foreach($consulta->result() as $row)
			{
				$this->session->set_userdata('id', $row->id);
				$this->session->set_userdata('ci', $row->ci);
				$this->session->set_userdata('nombres', $row->nombres);
				$this->session->set_userdata('primerApellido', $row->primerApellido);
				$this->session->set_userdata('segundoApellido', $row->primerApellido);
				$this->session->set_userdata('email', $row->email);
				$this->session->set_userdata('telefono', $row->telefono);
				$this->session->set_userdata('rol', $row->rol);
				$this->session->set_userdata('nombreUsuario', $row->nombreUsuario);
				$this->session->set_userdata('contrasenia', $row->contrasenia);
				$this->session->set_userdata('estado', $row->estado);
				$this->session->set_userdata('fechaRegistro', $row->fechaRegistro);
				$this->session->set_userdata('fechaActualizacion', $row->fechaActualizacion);
				$this->session->set_userdata('idUsuario', $row->idUsuario);
				redirect('usuario/panel','refresh');
			}
		}
		else
		{
			redirect('usuario/index/1','refresh');
		}
	}

	public function panel()
	{
		if($this->session->userdata('nombreUsuario'))
		{
			$tipo=$this->session->userdata('rol');
			if($tipo =='Administrador')
			{
				$lista=$this->usuario_model->listausuarios();
		        $data['usuario']=$lista;
				$this->load->view('estructura/cabecera');
        		$this->load->view('administrador/usuario/usuario_list',$data);
        		$this->load->view('estructura/footer');
		        
                
			}
			else{
				$lista=$this->servicio_model->listaservicios();
				$data['servicio']=$lista;

				$this->load->view('estructura/cabecera');
        		$this->load->view('administrador/servicio/serv_lista',$data);
        		$this->load->view('estructura/footer');
			}			 
		}
		else
		{
			redirect('usuario/index/2','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuario/index/3','refresh');
	}

    
	public function indexlte()
	{
        $lista=$this->usuario_model->listausuarios();
		        $data['usuario']=$lista;
				$this->load->view('estructura/cabecera');
				$this->load->view('administrador/usuario/usuario_list',$data);
        		$this->load->view('estructura/footer');
		        
	}




    public function agregar()
	{
		$this->load->view('estructura/cabecera');
		$this->load->view('administrador/usuario/usuario_form');
    	$this->load->view('estructura/footer');
		
	}
    public function agregarbd()
	{
		        
        // Obtener datos del formulario
        $primerApellido = trim( $_POST['primerApellido']);
        $nombres = trim($_POST['nombres']);
        $email = trim($_POST['email']);

        // Generar nombre de usuario a partir del apellido y CI
        $nombreUsuario = strtolower(substr($nombres, 0, 1) . $primerApellido);

        // Generar contraseña segura
        $contraseñaGenerada = $this->usuario_model->generarContraseñaSegura();

        // Aquí debes guardar $nombreUsuario, $contraseñaGenerada y otros datos del usuario en tu base de datos.
        $data['ci']= trim($_POST['carnet']);
        $data['nombres']=trim($_POST['nombres']);
        $data['primerApellido']=trim($_POST['primerApellido']);
        $data['segundoApellido']=trim($_POST['segundoApellido']);
        $data['email']=trim($_POST['email']);
        $data['telefono']=trim($_POST['telefono']);
        $data['rol']=trim($_POST['rol']);
        $data['nombreUsuario']=$nombreUsuario;
        $data['contrasenia']=md5($contraseñaGenerada);
		$data['idUsuario']=$_POST['idUsuario'];

        $this->usuario_model->agregarusuario($data);

        // Luego, envía el nombre de usuario y la contraseña al correo del usuario.
        $asunto = "Tu nuevo nombre de usuario y contraseña";
        $mensaje = "Nombre de usuario: $nombreUsuario\nContraseña: $contraseñaGenerada";
        ini_set('smtp_port', 587);
        mail($email, $asunto, $mensaje);

        // Redirige a la página de éxito o muestra un mensaje de éxito.
        redirect('usuario/index','refresh');
    }
    public function eliminarbd()
	{
        $id=$_POST['id'];

        $this->usuario_model->eliminarusuario($id);

        redirect('usuario/index','refresh');
	}
    public function modificar()
	{
        $id=$_POST['id'];
        $data['infousuario']=$this->usuario_model->recuperarusuario($id);
		$this->load->view('estructura/cabecera');
		$this->load->view('administrador/usuario/usuario_modif',$data);
    	$this->load->view('estructura/footer');
        
	}
    public function modificarbd()
	{
        $id=$_POST['id'];

        $data['ci']= trim($_POST['carnet']);
        $data['nombres']=trim($_POST['nombres']);
        $data['primerApellido']=trim($_POST['primerApellido']);
        $data['segundoApellido']=trim($_POST['segundoApellido']);
        $data['email']=trim($_POST['email']);
        $data['telefono']=trim($_POST['telefono']);
        $data['rol']=trim($_POST['rol']);
		$data['idUsuario']=$_POST['idUsuario'];

        $this->usuario_model->modificarusuario($id, $data);

        redirect('usuario/index','refresh');
	}

	public function change_password() {
		$this->load->library('form_validation');
	
		// Reglas de validación
		
		$this->form_validation->set_rules('current_password', 'Contraseña actual', 'required|callback_verify_current_password');
		$this->form_validation->set_rules('new_password', 'Nueva contraseña', 'required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirmar contraseña', 'required|matches[new_password]');
	
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('cambio_contrasenia');
		} else {
			// Encriptar la nueva contraseña con MD5
			$new_password = md5($this->input->post('new_password'));
	
			// Actualizar la contraseña en la base de datos
			$user_id = $this->session->userdata('user_id');
			$this->usuario_model->update_password($user_id, $new_password);
	
			// Redirigir a una página de éxito o a donde desees
			redirect('usuario/index','refresh');
		}
	}

    public function verify_current_password($password) {
		$user_id = $this->session->userdata('user_id');
		$stored_password = $this->usuario_model->get_password($user_id); // Contraseña almacenada en MD5
	
		if (md5($password) === $stored_password) {
			return true;
		} else {
			// Agrega mensajes de depuración
			echo "Contraseña ingresada: " . md5($password) . "<br>";
			echo "Contraseña almacenada: " . $stored_password;
			$this->form_validation->set_message('verify_current_password', 'La contraseña actual no es correcta.');
			return false;
		}
	}
	
	
}