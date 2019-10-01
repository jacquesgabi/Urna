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
			include 'conexao.php';
	   		$sql1="SELECT * FROM governador WHERE numGovernador=$numGovernador";
        	$resultado1 = mysqli_query($conexao,$sql1);
        	while ($linha=mysqli_fetch_array($resultado1)){$votos=$linha['votos'];}
        	$votos = $votos+1;
        	$sql="UPDATE `governador` SET `votos` = '$votos' WHERE `Governador`.`numGovernador` = $numGovernador";
        	$resultado = mysqli_query($conexao,$sql); 	
      
    	}
	}
	
?>