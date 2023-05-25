<?php 

require_once ("modelo/user.php");
Class UsuarioControlador extends usuario{

    public function __construct(){
        parent::__construct();
    }

    public function indexUsuario(){
        require_once ("vista/usuarios.php");

    }
    public function mostrarUsuario(){ 
        if(isset($id) or isset($_REQUEST['id'])){
            $usuario = $this->consultarUno($_REQUEST['id']);
        }else{
            $usuario = $this;
        }
        require_once ("vista/usuario_formulario.php");
    }

    public function guardar(){

        $this->id =$_REQUEST["id"];
        $this->nombre =$_REQUEST["nombre"];
        $this->apellido =$_REQUEST["apellido"];
        $this->edad =$_REQUEST["edad"];
        $this->telefono =$_REQUEST["telefono"];

        $this->id > 0 ? $this->actualizar():$this->insertar();
        
        header("location:index.php");

    }

    public function eliminar(){
        $this->delete($_REQUEST["id"]);
        header("location:index.php");

    }
}

?>