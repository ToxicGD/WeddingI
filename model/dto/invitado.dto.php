<?php
class Invitado{

    private $id;
    private $invitado;
    private $acompanante;
    private $mesa;
    private $codigo;

    //Getters
    public function getIdI(){
        return $this -> id;
    }

    public function getInvitado(){
        return $this -> invitado;
    }

    public function getAcompanante(){
        return $this -> acompanante;
    }

    public function getMesa(){
        return $this -> mesa;
    }

    public function getCodigo(){
        return $this -> codigo;
    }
    //Setters
    public function setIdI($id){
        $this -> id = $id;
    }

    public function setInvitado($invitado){
        $this -> invitado = $invitado;
    }

    public function setAcompanante($acompanante){
        $this -> acompanante = $acompanante;
    }

    public function setMesa($mesa){
        $this -> mesa = $mesa;
    }

    public function setCodigo($codigo){
        $this -> codigo = $codigo;
    }
}
?>