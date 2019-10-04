<?php

	class Governador {
	
		private $nome;
		private $numGovernador;
		private $partido;
		private $votos;
		public function __construct ($nome,$numGovernador,$partido,$votos){
			$this->nome=$nome;
			$this->numGovernador=$numGovernador;
			$this->partido=$partido;
			$this->votos=$votos;
		}
		function setVotoG($numGovernador){
			$this->numGovernador=$numGovernador;
			include_once 'conexao.php';
			$conexao = Conexao::getConexao();
			$sql1="SELECT * FROM governador WHERE numGovernador=$numGovernador";
			$statement = $conexao -> query($sql1);
			$conjResult = $statement -> fetchAll();

		foreach ($conjResult as $linha){
			$votos=$linha['votos'];
		}
		$votos = $votos+1;
		$sql="UPDATE `governador` SET `votos` = '$votos' WHERE `Governador`.`numGovernador` = $numGovernador";
		$statement = $conexao -> query($sql);
		$conjResult = $statement -> fetchAll(); 

	}
}



?>