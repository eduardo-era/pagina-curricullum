<?php

    class EnlacesPaginas{
     
        public function enlacespaginasmodelo($enlacesmodelo){
                
            if($enlacesmodelo == "crudjs" || $enlacesmodelo == "crudphp" || $enlacesmodelo == "progcsharp"|| $enlacesmodelo =="androidapp1")
            {
                $modulo = "enlaces/".$enlacesmodelo.".php";
                
            }
            else if($enlacesmodelo == "inicio")
            {
                $modulo = "enlaces/inicio.php";
            }
            else 
            {
                $modulo = "enlaces/inicio.php";
            }
            return $modulo; 
        }    
    }
?>