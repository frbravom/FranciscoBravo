<?php

class Atencion{
    private $rut;
    private $nombre;
    private $tipoatencion;
    private $fecatencion;
    private $nombreresponsable;
    private $comentario;
    
    function __construct($rut, $nombre, $tipoatencion, $fecatencion, $nombreresponsable, $comentario) {
        $this->rut = $rut;
        $this->nombre = $nombre;
        $this->tipoatencion = $tipoatencion;
        $this->fecatencion = $fecatencion;
        $this->nombreresponsable = $nombreresponsable;
        $this->comentario = $comentario;
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTipoatencion() {
        return $this->tipoatencion;
    }

    function getFecatencion() {
        return $this->fecatencion;
    }

    function getNombreresponsable() {
        return $this->nombreresponsable;
    }

    function getComentario() {
        return $this->comentario;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTipoatencion($tipoatencion) {
        $this->tipoatencion = $tipoatencion;
    }

    function setFecatencion($fecatencion) {
        $this->fecatencion = $fecatencion;
    }

    function setNombreresponsable($nombreresponsable) {
        $this->nombreresponsable = $nombreresponsable;
    }

    function setComentario($comentario) {
        $this->comentario = $comentario;
    }




    
}
