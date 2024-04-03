<?php
class invitadoModel{

    private $id;
    private $invitado;
    private $acompanante;
    private $mesa;
    private $codigo;

    public function __construct($objDtoInvitado){
        $this->id = $objDtoInvitado->getIdI();
        $this->invitado = $objDtoInvitado->getInvitado();
        $this->acompanante = $objDtoInvitado->getAcompanante();
        $this->mesa = $objDtoInvitado->getMesa();
        $this->codigo = $objDtoInvitado->getCodigo();
    }
    //-----------------------------------------------------
    // Crear invitados
    //-----------------------------------------------------
    public function mdlInsertInvitado(){
        $sql = "CALL PAddInv(?,?,?,?)";
        $state = false;

        try {
            $objCon = new Conexion();
            $stmt = $objCon->getConect()->prepare($sql);
            $stmt->bindParam(1, $this->invitado, PDO::PARAM_STR);
            $stmt->bindParam(2, $this->acompanante, PDO::PARAM_INT);
            $stmt->bindParam(3, $this->mesa, PDO::PARAM_INT);
            $stmt->bindParam(4, $this->codigo, PDO::PARAM_STR);
            $state = $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al crear invitado" . $e->getMessage();
        }
        return $state;
    }
    //-----------------------------------------------------
    // Eliminar invitado
    //-----------------------------------------------------
    public function mldDeleteInv(){
        $state = false;
        $sql = "CALL PDeleteInv(?)";
        try {
            $objCon = new Conexion();
            $stmt = $objCon -> getConect() -> prepare($sql);
            $stmt -> bindParam(1, $this -> id, PDO::PARAM_INT);
            $stmt -> execute();
            $state = true;
        } catch (PDOException $e) {
            echo "Eror al eliminar registro" . $e->getMessage();
        }
        return $state;
    }
    //-----------------------------------------------------
    // Mostrar lista de invitados
    //-----------------------------------------------------
    public function mldShowInvitados(){
        $state = false;
        $sql  = "CALL PShowAllInv()";
        try {
            $objCon = new Conexion();
            $stmt = $objCon->getConect()->prepare($sql);
            $stmt->execute();
            $state = $stmt;
        } catch (PDOException $e) {
            echo "Ha ocurrido un error al mostrar los datos en el dao " . $e->getMessage();
        }
        return $state;
    }
    //-----------------------------------------------------
    // Editar Invitados
    //-----------------------------------------------------

    public function mldUpdateInvitados(){
        $sql  = "CALL PEditInv(?, ?, ?, ?, ?);";
        $estado = false;
        try {
            $objCon = new Conexion();
            $stmt = $objCon->getConect() -> prepare($sql);
            $stmt->bindParam(1,$this->id, PDO::PARAM_INT);
            $stmt->bindParam(2, $this->invitado, PDO::PARAM_STR);
            $stmt->bindParam(3, $this->acompanante, PDO::PARAM_INT);
            $stmt->bindParam(4, $this->mesa, PDO::PARAM_INT);
            $stmt->bindParam(5, $this->codigo, PDO::PARAM_STR);

            $estado = $stmt -> execute();
        } catch (PDOException $e) {
            echo "Error al modfiicar Productos " . $e ->getMessage();
        }
        return $estado;
    }
}
