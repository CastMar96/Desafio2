<?php
class Ventas
{
	private $pdo;

    public $idVenta;
    public $idUsuario;
    public $detalle;
    public $fechaVenta;
    public $fechaPago;
    public $monto;
    public $tipoPago;
    public $estado;
	
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Listar()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT usuario.nombre,idVenta,detalle,fechaVenta,fechaPago,monto,tipoPago,estado FROM ventas,usuario WHERE usuario.idUsuario=ventas.idUsuario");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
//Funcion que me permite listar los pagos que estan pendientes dentro de la bd
    public function ListarP()
	{
		try
		{
			$result = array();
            $stm = $this->pdo->prepare("SELECT usuario.nombre,detalle,fechaVenta,fechaPago,monto,tipoPago,estado FROM ventas,usuario WHERE usuario.idUsuario=ventas.idUsuario AND estado='Pendiente'");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Ventas $data)
	{
		try 
		{
 
// Creating new date format from that timestamp
		$sql = "INSERT INTO ventas( idUsuario,detalle,fechaVenta,fechaPago,monto,tipoPago,estado)   
		        VALUES (?, ?, ?, ? , ? , ?,?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idUsuario,
                    $data->detalle,  
                    $data->fechaVenta,
                    $data->fechaPago,
					$data->monto, 
                    $data->tipoPago,
                    $data->estado 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE ventas SET 
						idUsuario          = ?, 
						detalle          = ?, 
						fechaVenta        = ?,
                        fechaPago        = ?,
						monto            = ?, 
						tipoPago 		= ?,
                        estado 			= ?
				    WHERE idVenta = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->idUsuario,
                        $data->detalle, 
                        $data->fechaVenta,
						$data->fechaPago,
                        $data->monto,
                        $data->tipoPago,
                        $data->estado,
                        $data->idVenta
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
			echo($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM ventas WHERE idVenta = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM ventas  WHERE idVenta = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}