<?php

require_once "Controladorphp.php";

class ControladorAlumnos extends Controladorphp {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        
    }

    public function insertarAlumno($alumno) {
        $alumnoModel = new Alumnos();
        $id = $alumnoModel->insert($alumno);
        $v = ($id > 0);
        $respuesta = new Respuesta($v ? EMensajes::INSERCION_EXITOSA : EMensajes::ERROR_INSERSION);
        $respuesta->setDatos($id);
        return $respuesta;
    }

    public function listarAlumno() {
        $alumnoModel = new Alumnos();
        $lista = $alumnoModel->get();
        $v = count($lista);
        $respuesta = new Respuesta($v ? EMensajes::CORRECTO : EMensajes::ERROR);
        $respuesta->setDatos($lista);
        return $respuesta;
    }

    public function actualizarAlumno($alumno) {
        $alumnoModel = new Alumnos();
        $actualizados = $alumnoModel->where("cuenta", "=", $alumno["idUsuario"])
                ->update($alumno);
        $v = ($actualizados > 0);
        return new Respuesta($v ? EMensajes::ACTUALIZACION_EXITOSA : EMensajes::ERROR_ACTUALIZACION);
    }

    public function eliminarAlumno($cuenta) {
        $alumnoModel = new Alumnos();
        $eliminados = $alumnoModel->where("cuenta", "=", $cuenta)->delete();
        $v = ($eliminados > 0);
        return new Respuesta($v ? EMensajes::ELIMINACION_EXITOSA : EMensajes::ERROR_ELIMINACION);
    }

    public function buscarAlumnoPorCuenta($cuenta) {
        $alumnoModel = new Alumnos();
        $usuario = $alumnoModel->where("cuenta", "=", $cuenta)->first();
        $v = ($cuenta != null);
        return new Respuesta($v ? EMensajes::CORRECTO : EMensajes::NO_HAY_REGISTROS);
    }

}
?>