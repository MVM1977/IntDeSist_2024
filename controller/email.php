<?php
    require_once("../config/conexion.php");
    require_once("../models/Email.php");
    $email = new Email();

    /*request_once("../models/Usuario.php");
    $usuario = new Usuario();*/

    switch($_GET["op"]){

        case "send_recuperar":
            $email->recuperar($_POST["usu_correo"]);
        break;

        case "send_nuevo":
            $email->nuevo($_POST["usu_correo"]);
        break;

        case "send_solicitud":
            $email->solicitud($_POST["reg_id"],$_POST["usu_nom"],$_POST["usu_ape"]);
        break;
 
    }
?>