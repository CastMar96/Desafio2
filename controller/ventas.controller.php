<?php
require_once 'model/model.ventas.php';

class VentasController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Ventas();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/ventas/ventas.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $ven = new Ventas();
        
        if(isset($_REQUEST['idVenta'])){
            $ven = $this->model->Obtener($_REQUEST['idVenta']);
        }
        
        require_once 'view/header.php';
        require_once 'view/ventas/ventas-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){

        $ven = new Ventas();

        $ven->idVenta = $_REQUEST['idVenta'];
        $ven->idUsuario = $_REQUEST['idUsuario'];
        $ven->detalle = $_REQUEST['detalle'];
        $ven->fechaVenta = $_REQUEST['fechaVenta'];
        $ven->fechaPago = $_REQUEST['fechaPago'];
        $ven->monto = $_REQUEST['monto'];
        $ven->tipoPago = $_REQUEST['tipoPago'];
        $ven->estado = $_REQUEST['estado'];
        $ven->idVenta > 0 
            ? $this->model->Actualizar($ven)
            : $this->model->Registrar($ven);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idVenta']);
        header('Location: index.php');
    }

   //funcion que muestra pagos pendientes
   public function VentasP(){
    require_once 'view/header.php';
    require_once 'view/ventas/ventas-pendientes.php';
    require_once 'view/footer.php';
}

}