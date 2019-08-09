<?php

class conexionphp{
    
    private $conexion;
    private $configuracion = [
        
        "driver" => "mysql",
        "host" => "localhost",
        "database" => "id10075586_curriculum1",
        "port" => "3306",
        "username" => "id10075586_lalo_era",
        "password" => "307277891",
        "charset" => "utf8mb4"
    ];
    
    public function _construct(){
        
        
        
    }
    
    public function conectar(){
        
        try{
            
            $CONTROLADOR = $this->configuracion["driver"];
            $SERVIDOR = $this ->configuracion ["host"];
            $BASE_DATOS = $this ->configuracion["database"];
            $PUERTO = $this ->configuracion["port"];
            $USUARIO = $this ->configuracion["username"];
            $CLAVE = $this ->configuracion["password"];
            $CODIFICACION = $this ->configuracion["charset"];
            
            $URL = "{$CONTROLADOR}:host={$SERVIDOR};"."dbname={$BASE_DATOS};";
            
            //crear conexion 
            
            $this->conexion = new PDO($URL,$USUARIO,$CLAVE);
            return $this->conexion;
            

        }catch(Exception $exc){
            echo $exc -> getTraceAsString();
        }
    }
}
?>