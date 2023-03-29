<?php
class conexionBD {
    
    //LOCAL HOST
    /*private $servidor = "mysql:host=localhost;dbname=bd_farmacia";
    private $usuario = "root";
    private $password = "";*/
    
    //REMOTE
    private $servidor = "mysql:host=sql10.freemysqlhosting.net;dbname=sql10609073";
    private $usuario = "sql10609073";
    private $password = "pIF7tMHpLw";
    private $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION , PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    
    protected $conn = null;

    public function open() {
        
        try {
            $this->conn =  new PDO($this->servidor, $this->usuario, $this->password, $this->opciones);
            //echo "Conexion establecida";
            return $this->conn ;
                    
        } catch (PDOException $exc) {
            echo "Ocurrio un problema en la conexión " . " " .  $exc->getMessage();
        }
    }
    
    public function close() {
        $this->conn = null;
    }
}

