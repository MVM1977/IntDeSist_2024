<?php
session_start();
class Conectar {
	protected $dbh;
		protected function Conexion(){
			try {
				$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=zensitec","root","");
				
				return $conectar;	
			} catch (Exception $e) {
				print "¡Error Mesa de Entrada BD!: " . $e->getMessage() . "<br/>";
				die();	
			}
		}
		
		public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
		}

		public static function ruta(){
			return "http://localhost:90/Zensitec/";
		}

		
	}
?>