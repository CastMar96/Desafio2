<?php
require_once 'model/model.usuario.php';

class UsuarioController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $usu = new Usuario();
        
        if(isset($_REQUEST['idUsuario'])){
            $usu = $this->model->Obtener($_REQUEST['idUsuario']);
        }
        
        require_once 'view/header.php';
        require_once 'view/usuario/usuario-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $usu = new Usuario();
        $usu->idUsuario = $_REQUEST['idUsuario'];
        $usu->nombre = $_REQUEST['nombre'];
        $usu->telefono = $_REQUEST['telefono'];
        $usu->direccion = $_REQUEST['direccion'];
        $usu->idUsuario > 0 
            ? $this->model->Actualizar($usu)
            : $this->model->Registrar($usu);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idUsuario']);
        header('Location: index.php');
    }
}