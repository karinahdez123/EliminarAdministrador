<?php

namespace App\Controllers;
use App\Models\mUsuarios;
use App\Models\mUsuariosE;
use App\Models\mInicioE;




class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function bienvenida()
	{
		return view('vbienvenida');
	}
	public function formulario()
	{

		return view('vformulario');
	}
	public function formulariodos()
	{

		return view('vformulariodos');
	}
	
	
	 public function formularioR()
    {

        return view('Registroe');
    }
   public function inicioE()
    {

        return view('vInicioE');
    }
  
	public function insertarForm(){
		$mUsuarios = new mUsuarios();
		$UsuarioNuevo=[
			"Nombre"=> $_POST['Nombre'],
			"Usuario"=> $_POST['Usuario'],
			"Email"=> $_POST['Email'],
			"Passsword"=> $_POST['Passsword']	    		    	    		    		    
		];
		$mUsuarios->insert($UsuarioNuevo);
		$datoId['idRegistrado'] = $mUsuarios->db->insertID();
		return view("vSuccess",$datoId);

	}
	public function insertarFormdos()
	{
		$mUsuariosE = new mUsuariosE();
		$usuarioNuevo=[
		    "nombre"=>$_POST['nombre'],
		    "apellidos"=>$_POST['apellidos'],
		    "RFC"=>$_POST['RFC'],
		    "num_plaza"=>$_POST['num_plaza'],
		    "correo"=>$_POST['email'],	
		    "Password"=>$_POST['password'],
		    "genero"=>$_POST['genero']		    		    	    		    		    
		];
		$mUsuariosE->insert($usuarioNuevo);
		$datoId['idRegistrado']=$mUsuariosE->db->insertID();
		return view("vSuccessE",$datoId);
	}

	public function mostrarRegistros()
	{
		$mUsuarios = new mUsuarios();
		$todos=$mUsuarios->findAll();
		$usuarios= array('usuarios'=>$todos);
		return view("vRegistros",$usuarios);
	}
	public function mostrarRegistrosE()
	{
		$mUsuariosE = new mUsuariosE();
		$todos =$mUsuariosE->findAll();
		$usuarios= array('usuarios' =>$todos);
        return view("vRegistrosE",$usuarios);
	}
	public function buscarRegistro()
	{
        $mUsuarios = new mUsuarios();
		$Id_usuario = $_POST['Id_usuario'];
		$usuario = $mUsuarios->find($Id_usuario);
		return view("vRegistroEncontrado",$usuario);
	}
	public function actualizarRegistros()
	{
		$mUsuarios = new mUsuarios();
		$Id_usuario = $_POST['Id_usuario'];
		$usuarioActualizado =[
			"Nombre" => $_POST['Nombre'],
			"Usuario" => $_POST['Usuario'],
			"Email" => $_POST['Email'],
			"Password" => $_POST['Password']
		];
		$mUsuarios->update($Id_usuario,$usuarioActualizado);
		$Usuario=$mUsuarios->find($Id_usuario);
		return $this->mostrarRegistros();
	}
	public function eliminarRegistro($id)
	{
		$mUsuarios = new mUsuarios();
		$Id_usuario = $id;
		$mUsuarios->delete($Id_usuario);
		return $this->mostrarRegistros();
	}

	}


