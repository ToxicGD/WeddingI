<?php

class invitadoController{


    public function showInvitados(){
        $respon = false;
        try {
            $objDtoInv = new Invitado();
            $objDaoInv = new invitadoModel($objDtoInv);
            $respon = $objDaoInv -> mldShowInvitados()->fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the 
            controller of show all " . $e->getMessage();
        }
        return $respon;
    }
}



?>