<?php
    require_once("../config/conexion.php");
    require_once("../models/Registro.php");
    $registro = new Registro();

    switch($_GET["op"]){ 
        
        case "insert":
            $datos = $registro->insert_registro($_POST["usu_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["reg_id"] = $row["reg_id"];
                }
                echo json_encode($output);
            }
        break;

        case "update":
            $registro->update_registro($_POST["reg_id"],$_POST["reg_asu"],$_POST["reg_desc"]);
            
        break;

        case "insertdetalle":
            $registro->insert_detalle($_POST["reg_id"],$_POST["regd_obs"],$_POST["regd_file"]);
        break;

        case "deletedetalle":
            $registro->delete_detalle($_POST["regd_id"]);
        break;

        case "listardetalle":
            $datos=$registro->list_detalle($_POST["reg_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["regd_obs"];
                $sub_array[] = '<a href="../../public/src/'.$row["regd_file"].'" target="_blank">'.$row["regd_file"].'</a>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["regd_id"].');"  id="'.$row["regd_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case "listardetalle_consulta":
            $datos=$registro->list_detalle($_POST["reg_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["regd_obs"];
                $sub_array[] = '<a href="../../public/src/'.$row["regd_file"].'" target="_blank">'.$row["regd_file"].'</a>';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case "listar":
            $datos=$registro->list_registroxusu($_POST["usu_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = "MDE-".$row["reg_id"];               
                $sub_array[] = date("d-m-Y",strtotime($row["fech_crea"]));
                $sub_array[] = $row["reg_asun"];
                $sub_array[] = $row["reg_desc"];
                $sub_array[] = '<button type="button" onClick="ver('.$row["reg_id"].');"  id="'.$row["reg_id"].'" class="btn btn-outline-info btn-icon"><div><i class="fa fa-database"></i></div></button>';
                $data[] = $sub_array;
            }
            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;



    }

?>