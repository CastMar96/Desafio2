<?php
class Usuario
{
	private $pdo;
    
    public $idUsuario;
    public $nombre;
    public $telefono;
    public $direccion;

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

	public function Registrar(Usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (nombre,telefono,direccion) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->nombre, 
					$data->telefono,
					$data->direccion,

                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}



	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuario");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuario WHERE idUsuario = ?");
			          

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
			        ->prepare("DELETE FROM usuario WHERE idUsuario = ?");			          	
			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE usuario SET 
						nombre          = ?, 
						telefono        = ?,
                        direccion        = ?
				    WHERE idUsuario = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->telefono,
						$data->direccion,
                        $data->idUsuario
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	
}