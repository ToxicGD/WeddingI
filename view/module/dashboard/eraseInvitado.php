<?php

eraseInvitado();
function eraseInvitado(){
    try {
        $objDtoInvitado = new Invitado();
        $objDtoInvitado -> setIdI($_GET['id']);
        $objDaoInvitado = new invitadoModel($objDtoInvitado);
        if ($objDaoInvitado -> mldDeleteInv() == true ) {

            echo "<script>
                    Swal.fire(
                        'Borrado!',
                        'El registro ha sido borrado',
                        'success'
                        )
                </script>";
                include_once 'view/module/dashboard/dash.php';
        }

    } catch ( PDOException $e ) {
        echo "Error on the delete of the controller of show all " . $e->getMessage();
    }


}
?>