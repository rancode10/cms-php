<?php

require_once './libs/DB.php';

class ModeloBase extends DB {
	public $db;
	public $string;

	public function __construct() {
		$this->db = new DB();
		
	}

	public function insertar($tabla, $datos) {
		try {
			$llaves = array_keys($datos);
	    $sql = "INSERT INTO $tabla (".implode(", ", $llaves).") \n";
	    $sql .= "VALUES ( :".implode(", :",$llaves).")";
	    $q = $this->db->prepare($sql);
	    return $q->execute($datos);
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	

}
