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

    // public function showInvitadoX($codigo) {

    //     $respon = false;
    //     try {
    //         $objDtoInvitado = new Invitado();
    //         $objDtoInvitado->setCodigo($codigo);
    
    //         $objDaoInvitado = new invitadoModel($objDtoInvitado);
    //         $respon = $objDaoInvitado->mldSearchInvX()->fetchAll();
    //     } catch (PDOException $e) {
    //         echo "Error al ejecutar la función showInvitadoX: " . $e->getMessage();
    //     }
    
    //     return $respon;
    // }

    public function createInvitados($invitado, $acompanante, $mesa, $codigo ){
        try{
            $objDtoInvitado = new Invitado();
            $objDtoInvitado -> setInvitado($invitado);
            $objDtoInvitado -> setAcompanante($acompanante);
            $objDtoInvitado -> setMesa($mesa);
            $objDtoInvitado -> setCodigo($codigo);

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

    public function UpdateInvitado($id, $invitado, $acompanante, $mesa){
        try{
            $objDtoInvitado = new Invitado();
            $objDtoInvitado -> setIdI($id);
            $objDtoInvitado -> setInvitado($invitado);
            $objDtoInvitado -> setAcompanante($acompanante);
            $objDtoInvitado -> setMesa($mesa);
            $objDaoInvitado = new InvitadoModel($objDtoInvitado);
            if ($objDaoInvitado -> mldUpdateInvitados()){
                echo "<script>
                Swal.fire(
                    'Actualizado!',
                    'El registro ha sido actualizado',
                    'success'
                )
            </script>";
            }
        } catch(PDOException $e){
            echo 'Error al modificara'.$e->getMessage();
        }
    }

}



?>