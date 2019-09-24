<?php

	class Conexao{
		public static function getConexao(){ //Static ->
			$conexao = new PDO ('mysql:host=localhost;dbname=urna','root','');
			return $conexao;
		}
	}

 ?>