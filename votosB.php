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
		  $sql4="SELECT * FROM votos WHERE idVotos='1'";
      $resultado4 = mysqli_query($conexao,$sql4);
      while ($linha=mysqli_fetch_array($resultado4)){$branco=$linha['branco'];}
      $branco=$branco+1;
      $sql="UPDATE `votos` SET `branco` = $branco WHERE `votos`.`idVotos` = 1";
      $resultado = mysqli_query($conexao,$sql); 	
	  }

    function setNulo($idVoto){
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

  class NBGovernador{
    private $idVoto;
    private $branco;
    private $nulo;
    public function __construct ($idVoto,$branco,$nulo){
		  $this->idVoto=$idVoto;
		  $this->branco=$branco;
		  $this->nulo=$nulo;
	  }

	  function setBrancoG($idVoto){
		  include 'conexao.php';
		  $this->idVoto=$idVoto;
		  $sql1="SELECT * FROM votos WHERE idVotos='2'";
      $resultado2 = mysqli_query($conexao,$sql2);
      while ($linha=mysqli_fetch_array($resultado2)){$branco=$linha['branco'];}
      $brancoG=$brancoG+1;
      $sql="UPDATE `votos` SET `branco` = $brancoG WHERE `votos`.`idVotos` = 2";
      $resultado = mysqli_query($conexao,$sql); 	
	  }
    
    function setNuloG($idVoto){
		  include 'conexao.php';
		  $this->idVoto=$idVoto;
		  $sql3="SELECT * FROM votos WHERE idVotos='2'";
      $resultado3 = mysqli_query($conexao,$sql3);
      while ($linha=mysqli_fetch_array($resultado3)){$nuloG=$linha['nulo'];}
      $nuloG=$nuloG+1;
      $sql="UPDATE `votos` SET `nulo` = $nuloG WHERE `votos`.`idVotos` = 2";
      $resultado = mysqli_query($conexao,$sql); 	
	  }
  }

?>