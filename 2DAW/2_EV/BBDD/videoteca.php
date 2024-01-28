<?php
trait GestionBBDD{
  public function conecta($URL, $user, $password, $BBDD){
    $conn = new mysqli($URL, $user, $password, $BBDD);
    if($conn->connect_errno){ die("Fallo en la conexion: $conn->connect_error"); return false;}
    return $conn;
  }
  public function desconecta($connexion){ $connexion->close(); }
}
class Videoteca{
  protected $conn;
  use GestionBBDD;
  public function __construct(){
    $this->conn = $this->conecta('localhost', 'denys', 'denys', 'pelis');
  }
  public function getPelicula($id){
    $sql = 'SELECT titulo, anio_estreno, duracion FROM pelicula WHERE id_pelicula = ?';
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $resultado = $stmt->execute();
    if($resultado){
      $datos = $stmt->get_result();
      while($fila = $datos->fetch_assoc()){
        echo "{$fila['titulo']} - {$fila['anio_estreno']} - {$fila['duracion']}";
      }
    }else{ echo "No hay ninguna pelicula";}
  }
  public function getInterpretesPelicula($id){
    $sql = '
      SELECT i.nombre_actor
      FROM pelicula p
      JOIN peliculainterprete pi ON p.id_pelicula = pi.id_pelicula
      JOIN interprete i ON pi.id_interprete = i.id_interprete
      WHERE p.id_pelicula = ?
    ';
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $resultado = $stmt->execute();
    if($resultado){
      $nombres = $stmt->get_result()->fetch_assoc();
      return $nombres;
    }else{ echo "No hay ninguna pelicula";}
  }

  public function __destruct(){ $this->desconecta($this->conn);}
}
$vedeoteca = new Videoteca();
$vedeoteca->getPelicula(2343);
$vedeoteca->getInterpretesPelicula(2343);