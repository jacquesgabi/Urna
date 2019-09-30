<?php
class NBPresidente{
  private $idVoto;
  private $branco;
  private $nulo;
   public function __construct ($idVoto,$branco,$nulo){
		$this->idVoto=$idVoto;
		$this->branco=$branco;
		$this->nulo=$nulo;
	}
	function setBranco($idVoto){
		include 'conexao.php';
		$this->idVoto=$idVoto;
		$sql1="SELECT * FROM votos WHERE idVotos='1'";
        $resultado1 = mysqli_query($conexao,$sql1);
         while ($linha=mysqli_fetch_array($resultado1)){$branco=$linha['branco'];}
         $branco=$branco+1;
         $sql="UPDATE `votos` SET `branco` = $branco WHERE `votos`.`idVotos` = 1";
         $resultado = mysqli_query($conexao,$sql); 	


	}function setNulo($idVoto){
		include 'conexao.php';
		$this->idVoto=$idVoto;
		$sql1="SELECT * FROM votos WHERE idVotos='1'";
        $resultado1 = mysqli_query($conexao,$sql1);
         while ($linha=mysqli_fetch_array($resultado1)){$nulo=$linha['nulo'];}
         $nulo=$nulo+1;
         $sql="UPDATE `votos` SET `nulo` = $nulo WHERE `votos`.`idVotos` = 1";
         $resultado = mysqli_query($conexao,$sql); 	


	}


}
?>