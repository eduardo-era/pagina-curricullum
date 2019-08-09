<?php

    class MVCController{
        
        public function mostrar(){
            
            include "vista/plantilla.php";
        
        }
        
        public function EnlacesPaginasController(){
            
            if(isset($_GET["action"]))
            {
                $enlacecontrolador = $_GET["action"];
            }
            else 
            {
                $enlacecontrolador = "inicio";
            }
            
            $respuesta = EnlacesPaginas::enlacespaginasmodelo($enlacecontrolador);
            include $respuesta;
        }
    }
?>