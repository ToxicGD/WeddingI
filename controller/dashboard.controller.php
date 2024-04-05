<?php
session_start();
class Dashboard{

    public function getIntro(){
        
        if (isset($_SESSION['invitacion']) and $_SESSION['invitacion'] == true){
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