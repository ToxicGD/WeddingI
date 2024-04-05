<?php
session_start();
class Dashboard{

    public function getIntro()
    {
        $ruta = $_REQUEST['route'];
        try {
            if (isset($_GET['route'])) {
                switch ($_GET['route']) {
                    case 'home':
                        include_once 'dash.php';
                        break;
                    case 'invitado':
                        include_once 'dash.php';
                        break;
                    case 'erase':
                        include_once 'eraseInvitado.php';
                        break;
                    case 'invite':
                        include_once 'view/module/invitacion.php';
                        $_SESSION["invitacion"] = true;
                        break;
                    default:
                        include_once 'dash.php';
                        break;
                }
            }
        } catch (Exception $th) {
        }
        
        // $codigo = $_REQUEST['codigo'];
        // var_dump($ruta);
        // var_dump($codigo);

        if (isset($_SESSION['invitacion'])and $ruta == "invite"){
            $_SESSION['invitacion'] == true;
            require_once "view/module/invitacion.php";
        }
        elseif(isset($_SESSION['login']) and $_SESSION['login'] == true) {
            require_once 'view/module/dashboard/dash.php';
        }
        else{
            require_once "view/module/auth/login.php";
        }

        }
    }
?>