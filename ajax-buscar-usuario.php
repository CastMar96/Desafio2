<?php
require_once('database.php');
 
/*function get_usuario($conn , $term){ 
 $query = "SELECT idUsuario,nombre FROM usuario WHERE nombre LIKE '%".$term."%' ORDER BY nombre ASC";
 $result = mysqli_query($conn, $query); 
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data; 
}
 
if (isset($_GET['term'])) {
 $getUsuario = get_city($conn, $_GET['term']);
 $usuarioList = array();
 foreach($getUsuario as $nombre){
 $usuarioList[] = $nombre['nombre'];
 }
 echo json_encode($usuarioList);
}
*/


$id = $_GET['idUsuario'];
$sql = "SELECT nombre FROM usuario WHERE nombre like '%".$idUsuario."%' limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 echo $row["nombre"]. "\n";
 }
} else {
 echo "0 results";
}

?>

