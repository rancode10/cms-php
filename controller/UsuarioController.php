<?php

require_once 'model/usuario.php';

class UsuarioController {

	public function registro() {
		require_once('./view/includes/cabecera.php');
		require_once('./view/includes/pie.php');
	}

	public function guardarUsuario($datos) {
		$errores = '';
		if(!isset($datos['email'])) {
			$errores = '<p>Falta el nombre</p>';
		}

		$usuario = new Usuario();
		$usuario->guardarUsuario($datos);
	}

}

?>