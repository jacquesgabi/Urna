<?php
		
class Presidente {
	
  private $nome;
  private $numPresidente;
  private $partido;
  private $votos;
		public function __construct ($nome,$numPresidente,$partido,$votos){
		$this->nome=$nome;
		$this->numPresidente=$numPresidente;
		$this->partido=$partido;
		$this->votos=$votos;
	}
	function setVoto($numPresidente){
		$this->numPresidente=$numPresidente;
		include_once 'conexao.php';
		$conexao = Conexao::getConexao();
		$sql1="SELECT * FROM presidente WHERE numPresidente=$numPresidente";
		$statement = $conexao -> query($sql1);
		$conjResult = $statement -> fetchAll();

		foreach ($conjResult as $linha){
			$votos=$linha['votos'];
		}
		$votos = $votos+1;
		$sql="UPDATE `presidente` SET `votos` = '$votos' WHERE `presidente`.`numPresidente` = $numPresidente";
		$statement = $conexao -> query($sql);
		$conjResult = $statement -> fetchAll();
	  
	}
}
	


?>