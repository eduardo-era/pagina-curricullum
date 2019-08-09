<?php

class Alumnos extends ModeloGenerico {

    protected $cuenta;
    protected $nombre;
    protected $apellidop;
    protected $apellidom;
    protected $turno;
    protected $promedio;

    public function __construct($propiedades = null) {
        parent::__construct("ALUMNOS", Alumnos::class, $propiedades);
    }

    function getcuenta() {
        return $this->cuenta;
    }

    function getnombre() {
        return $this->nombre;
    }

    function getapellidop() {
        return $this->apellidop;
    }

    function getapellidom() {
        return $this->apellidom;
    }

    function getturno() {
        return $this->turno;
    }

    function getpromedio() {
        return $this->promedio;
    }

    function setcuenta() {
        return $this->cuenta;
    }

    function setnombre() {
        return $this->nombre;
    }

    function setapellidop() {
        return $this->apellidop;
    }

    function setapellidom() {
        return $this->apellidom;
    }

    function setturno() {
        return $this->turno;
    }

    function setpromedio() {
        return $this->promedio;
    }

}
?>