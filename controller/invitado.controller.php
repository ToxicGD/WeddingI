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

    public function createInvitados($invitado, $acompanante, $mesa, $link ){
        try{
            $objDtoInvitado = new Invitado();
            $objDtoInvitado -> setInvitado($invitado);
            $objDtoInvitado -> setAcompanante($acompanante);
            $objDtoInvitado -> setMesa($mesa);
            $objDtoInvitado -> setCodigo($link);

            $objDaoInvitado = new invitadoModel($objDtoInvitado);

            if ($objDaoInvitado -> mdlInsertInvitado()){
                echo "<script>
                Swal.fire(
                    'Guardado',
                    'Registro insertado',
                    'success'
                  )
                </script>";
            }

        } catch(Exception $e){
            echo "Error en el controlador de insercion " . $e->getMessage();
        }
    }
}



?>