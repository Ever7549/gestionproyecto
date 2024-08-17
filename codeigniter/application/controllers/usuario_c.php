


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_c extends CI_Controller {


    public function m_listar()
	{
        $this->load->model('Usuario_model'); // Cargar el modelo
        $listar=$this->Usuario_model->listadeusuarios();
        $data['usuario']=$listar;
        //$this->load->view('temp/head');
	      //$this->load->view('temp/menu');
        $this->load->view('usuario_v',$data);
        // $this->load->view('temp/test');
	      // $this->load->view('temp/footer');
    }
     public function agregar()
  {
      //$this->load->view('temp/head');
     // $this->load->view('temp/menu');
      $this->load->view('agregarusuario_v');
     // $this->load->view('temp/test');
     // $this->load->view('temp/footer');
  }
  public function agregarbd()
  {
    //$this->load->model('Libros_model'); 
    $this->load->model('Usuario_model');
    $data['nombres']=strtoupper($_POST['nombresv']);
    $data['primerApellido']=strtoupper($_POST['primerApellidov']);
    $data['segundoApellido']=strtoupper($_POST['segundoApellidov']);
    $data['correo']=$_POST['correov'];
    $data['telefono']=$_POST['telefonov'];
    $data['nombreUsuario']=$_POST['nombreUsuariov'];
    $data['contrasena']=$_POST['contrasenav'];
    $data['estado']=$_POST['estadov'];

    $this->Usuario_model->agregarusuario($data);
    redirect('Usuario_c/m_listar','refresh');//REDIRECIONA
  }
  public function eliminarbd()
  {
  $this->load->model('Usuario_model'); 
  $idUsuario=$_POST['idusuario'];
  $this->Usuario_model->eliminarusuario($idusuario);
  redirect('Usuario_c/m_listar','refresh');//REDIRECIONA
  }
  public function modificar()
  {
    $this->load->model('Usuario_model');
    $idUsuario=$_POST['idusuario'];
    //echo $idlibro;
	  $data['infousuario']=$this->Usuario_model->recuperarusuario($idusuario);
   // $this->load->view('temp/head');
    //$this->load->view('temp/menu');
    $this->load->view('temp/v_modificarUsuario',$data);
    //$this->load->view('temp/test');
   // $this->load->view('temp/footer');
  }
	public function modificarbd()
	{
    $this->load->model('Usuario_model');
	  $idusuario=$_POST['idusuario'];
      $data['nombres']=strtoupper($_POST['nombresv']);
      $data['primerApellido']=strtoupper($_POST['primerApellidov']);
      $data['segundoApellido']=strtoupper($_POST['segundoApellidov']);
      $data['correo']=$_POST['correov'];
      $data['telefono']=$_POST['telefonov'];
      $data['nombreUsuario']=$_POST['nombreUsuariov'];
      $data['contrasena']=$_POST['contrasenav'];
      $data['estado']=$_POST['estadov'];

		$this->Usuario_model->modificarusuario($idusuario,$data);
		redirect('Usuario_c/m_listar','refresh');
	}
}