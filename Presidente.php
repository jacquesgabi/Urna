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
		include 'conexao.php';
	   $sql1="SELECT * FROM presidente WHERE numPresidente=$numPresidente";
        $resultado1 = mysqli_query($conexao,$sql1);
        while ($linha=mysqli_fetch_array($resultado1)){$votos=$linha['votos'];}
        $votos = $votos+1;
        $sql="UPDATE `presidente` SET `votos` = '$votos' WHERE `presidente`.`numPresidente` = $numPresidente";
        $resultado = mysqli_query($conexao,$sql); 	
      
    }
}
	


?>