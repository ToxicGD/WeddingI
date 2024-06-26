<?php
    //require_once "../model/conexion.php";
    //require_once "../model/dto/user.dto.php";

    class UserModel{
        private $id;
        private $nombre;
        private $password;

        public function __construct($objDtoUser){
            $this ->id      =  $objDtoUser -> getId() ;
            $this ->nombre      =  $objDtoUser -> getUser() ;
            $this ->password  =  $objDtoUser -> getPassword() ;
        }
        public function getQueryLogin(){

            $sql  = "SELECT * FROM USER WHERE nombre = ? AND PASSWORD = ?";
            try {
                $objCon = new Conexion();

                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> nombre,  PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> password,  PDO::PARAM_STR);
                $stmt -> execute();
                $result = $stmt;
            } catch (Exception $e) {
                echo "Error al consultar usuarios " . $e ->getMessage();
            }
            return $result;
        }//END METHOD
        public function mldInsertUsuario(){
            $sql  = "CALL spInsertUser (?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> nombre,      PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> password,  PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOException $e) {
                echo "Error al insertar usuarios " . $e ->getMessage();
            }
            return $estado;
        }
        public function mldSearchAllUser(){
            $respon = false;
            $sql  = "call spSearchAllUser()";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }//END SEARCHALLUSER
        public function mldEraseUser(){
            $respon = false;
            $sql  = "call spDeleteUser( ? )";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> id, PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }

    public function mldUpdateUsuario(){
        $sql  = "CALL spUpdateUser (?, ?, ?, ?, ?);";
        $estado = false;
        try {
            $objCon = new Conexion();
            $stmt = $objCon->getConect() -> prepare($sql);
            $stmt ->  bindParam(1,  $this -> id,      PDO::PARAM_INT);
            $stmt ->  bindParam(4,  $this -> nombre,      PDO::PARAM_STR);
            $stmt ->  bindParam(5,  $this -> password,  PDO::PARAM_STR);

            $estado = $stmt -> execute();
        } catch (PDOException $e) {
            echo "Error al modfiicar usuarios " . $e ->getMessage();
        }
        return $estado;
    }
}//END CLASS
?>