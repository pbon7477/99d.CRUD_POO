
<?php 

include_once('Conexion.php');

class Objeto_Blog{
    private $id;
    private $titulo;
    private $fecha;
    private $comentario;
    private $imagen;

    private $conexion;

    public function __construct(){
        $this->conexion = new Conexion();
    }

    public function set($atributo,$valor){
        $this->$atributo = $valor;
    }

    public function get($atributo){
        return $this->$atributo;
    }

    /*METODO INSERTAR */

    public function insert(){
        $sql2= "SELECT * FROM contenido WHERE id = '{$this->id}'";
        $resultado = $this->conexion->consultaRetorno($sql2);
        $num_filas = $resultado->rowCount();

        if($num_filas != 0){
            return false;

        }else{
            $sql = "INSERT INTO contenido(titulo,fecha,comentario,imagen) 
                    VALUES('{$this->titulo}','{$this->fecha}','{$this->comentario}','{$this->imagen}')";

            $this->conexion->consultaSimple($sql);
            return true;
        }
    }

    /*METODO ELIMINAR */
    public function delete(){
        $sql = "DELETE FROM contenido WHERE id = '{$this->id}'";
        $this->conexion->consultaSimple($sql);
    }

    /*METODO VER */
    public function read(){
        $sql = "SELECT * FROM contenido WHERE id = '{$this->id}'";
        $resultado = $this->conexion->consultaRetorno($sql);
        $row = $resultado->fetch(PDO::FETCH_ASSOC);

        $this->titulo = $row['titulo'];
        $this->fecha = $row['fecha'];
        $this->comentario = $row['comentario'];
        $this->imagen = $row['imagen'];

        return $row;
    }

    /* METODO ACTUALIZAR */

    public function update(){
        $sql = "UPDATE contenido SET titulo = '{$this->titulo}',
                       fecha = '{$this->fecha}',
                       comentario = '{$this->comentario}',
                       imagen = '{$this->imagen}' 
                WHERE id = '{$this->id}'";
        $this->conexion->consultaSimple($sql);        
    }

    /* METODO LISTAR */

    public function list(){
        $sql = "SELECT * FROM contenido ORDER BY id DESC";
        $resultado = $this->conexion->consultaRetorno($sql);
        return $resultado;
    }




    /*metodo subir imagen */
    public function subirImagen(){
        
        if($_FILES['imagen']['error']){
            switch ($_FILES['imagen']['error']) {
                case 1:
                    echo '<p>El tamaño del archivo exede lo permitido por el servidor.</p>';
                    break;
                case 2:
                    echo "<p>El archivo exede los 2MB.</p>";
                    break;
                case 3:
                    echo "<p>El envio del archivo se ha interrumpido.</p>";
                    break;
                case 4:
                    echo "<p>No se ha enviado ningun archivo.</p>";
                    break;
            }
        }else{
            if(($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK)){
                $destino_ruta = 'imagenes/';
                move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_ruta . $_FILES['imagen']['name']);
                echo "<p>El archivo " . $_FILES['imagen']['name'] . " se ha copiado en el directorio de imagenes.</p>"; 
            }
        }
    }
}

?>