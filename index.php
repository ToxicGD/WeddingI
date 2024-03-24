<?php
    //require_once "view/module/dashboard/dash.php";

      /////////////////////////////////////////////
    //                 CONTROLLER              //
    /////////////////////////////////////////////
    require_once 'controller/user.controller.php';
    require_once 'controller/dashboard.controller.php';
    require_once 'controller/invitado.controller.php';
    /////////////////////////////////////////////
    //                   MODEL                 //
    /////////////////////////////////////////////
    require_once 'model/dao/user.dao.php';
    require_once 'model/dto/user.dto.php';
    require_once 'model/dao/invitado.dao.php';
    require_once 'model/dto/invitado.dto.php';
/////////////////////////////////////////////
    //                 CONEXION                //
    /////////////////////////////////////////////
    require_once 'model/conection.php';
    /////////////////////////////////////////////
    //                  LIBRARYS               //
    /////////////////////////////////////////////
    

    /////////////////////////////////////////////
                    /* run */ 
    /////////////////////////////////////////////
    $objRun = new Dashboard();
    // $objRun = new Kernel();
    $objRun->getIntro();
    ?>