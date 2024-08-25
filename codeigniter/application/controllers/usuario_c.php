
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_c extends CI_Controller {


    public function m_listar()
	{
        $this->load->model('Usuario_model'); // Cargar el modelo
        $data['usuario']=$this->Usuario_model->listadeusuarios();
        $this->load->view('usuario_v',$data);
    }
     public function agregar()
  {
      $this->load->view('agregarusuario_v');
  }
  public function agregarbd()
  {
    $this->load->model('Usuario_model');
    $data['nombres']=strtoupper($_POST['nombresv']);
    $data['primerApellido']=strtoupper($_POST['primerApellidov']);
    $data['segundoApellido']=strtoupper($_POST['segundoApellidov']);
    $data['correo']=$_POST['correov'];
    $data['telefono']=$_POST['telefonov'];
    $data['nombreUsuario']=$_POST['nombreUsuariov'];
    $data['contrasena'] = sha1($_POST['contrasenav']);
    $data['estado']=$_POST['estadov'];
   // $data['usuarioCreador']=$_POST['usuarioCreadorv'];
    $data['carrera_idcarrera']=$_POST['carrera_idcarrerav'];
    $data['rol_idrol']=$_POST['rol_idrolv'];

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
  public function modificar($idusuario)
  {
    $this->load->model('Usuario_model');
    // Recuperar la información del usuario usando el ID
    $data['infousuario'] = $this->Usuario_model->recuperarusuario($idusuario);
    // Cargar la vista de modificación y pasar los datos del usuario
    $this->load->view('modificar_usuario_v', $data);
  }
  public function modificarbd()
  {
    $this->load->model('Usuario_model');
    $idusuario = $this->input->post('idusuario');
    $data = array(
        'nombres' => strtoupper($this->input->post('nombres')),
        'primerApellido' => strtoupper($this->input->post('primerApellido')),
        'segundoApellido' => strtoupper($this->input->post('segundoApellido')),
        'correo' => $this->input->post('correo'),
        'telefono' => $this->input->post('telefono'),
        'nombreUsuario' => $this->input->post('nombreUsuario'),
        //'contrasena' => sha1($this->input->post('contrasena')),
        'estado' => $this->input->post('estado')
    );

    // Llama al método modificar_usuario con el ID y los datos
    $this->Usuario_model->modificar_usuario($idusuario, $data);
    redirect('usuario_c/m_listar', 'refresh');
  }


}

