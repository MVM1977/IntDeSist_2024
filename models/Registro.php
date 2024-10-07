<?php
    class Registro extends Conectar {
        
        public function insert_registro($usu_id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="insert into tm_registro values (null, ?, null,null,now(),null,null,2);";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $usu_id);
            $sql->execute();

            $sql1="select last_insert_id() as 'reg_id';";
            $sql1=$conectar->prepare($sql1);
            $sql1->execute();
            return $resultado=$sql1->fetchall(pdo::FETCH_ASSOC);
        }

        public function update_registro($reg_id,$reg_asun,$reg_desc){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="update tm_registro set
                    reg_asun=?,
                    reg_desc=?,
                    est=1
                where
                    reg_id=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $reg_asun);
            $sql->bindvalue(2, $reg_desc);
            $sql->bindvalue(3, $reg_id);
            $sql->execute();
        }

        public function insert_detalle($reg_id,$regd_obs,$regd_file){
            $conectar=parent::conexion();
            parent::set_names();

            require_once("Registro.php");
            $regx = new Registro();
            $regd_file = '';
            if($_FILES["regd_file"]["name"] != '')
            {
                $regd_file = $regx->upload_file();
            }else{
                $regd_file = $_POST["hidden_file_imagen"];
            }

            $sql="insert into tm_detalle values (null, ?, ?,?,now(),1);";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $reg_id);
            $sql->bindvalue(2, $regd_obs);
            $sql->bindvalue(3, $regd_file);
            $sql->execute();
        }

        public function upload_file(){
            if(isset($_FILES["regd_file"]))
            {
              $extension = explode('.', $_FILES['regd_file']['name']);
              $new_name = rand() . '.' . $extension[1];
              $destination = '../public/src/' . $new_name;
              move_uploaded_file($_FILES['regd_file']['tmp_name'], $destination);
              return $new_name;
            }
        }

        public function list_detalle($reg_id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_detalle WHERE reg_id=? and est=1;";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $reg_id);
            $sql->execute();
            return $resultado=$sql->fetchall(pdo::FETCH_ASSOC);
        }

        public function delete_detalle($regd_id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="update tm_detalle set est=0 where regd_id=?;";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $regd_id);
            $sql->execute();
        }  

        public function list_registroxusu($usu_id){
            $conectar=parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_registro WHERE usu_id=? and est=1;";
            $sql=$conectar->prepare($sql);
            $sql->bindvalue(1, $usu_id);
            $sql->execute();
            return $resultado=$sql->fetchall(pdo::FETCH_ASSOC);
        }


    }
?>