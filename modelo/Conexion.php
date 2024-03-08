
<?php 

class Conexion{
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;

    private $conexion;

    public function __construct(){
        $this->db_host = 'localhost';
        $this->db_name = 'bbddblog';
        $this->db_user = 'root';
        $this->db_pass = '123456';

        try{
            $this->conexion = new PDO("mysql:host={$this->db_host};dbname={$this->db_name}", $this->db_user, $this->db_pass);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->exec('SET CHARACTER SET UTF8');

        }catch(Exception $e){
            die('Error:' . $e->getMessage() . "<p>Linea: </p>" . $e->getLine());        
        }
    }
    
    public function consultaSimple($sql){
        $this->conexion->query($sql);
    }

    public function consultaRetorno($sql){
        $consulta = $this->conexion->query($sql);
        return $consulta;
    }

}

?>