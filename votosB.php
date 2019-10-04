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
		  include_once 'conexao.php';
      $conexao = Conexao::getConexao();
		  $this->idVoto=$idVoto;
		  $sql4="SELECT * FROM votos WHERE idVotos='1'";
      $statement = $conexao -> query($sql4);
      $conjResult = $statement -> fetchAll(); 
      foreach ($conjResult as $linha){
        $branco=$linha['branco'];
      }
      $branco=$branco+1;
      $sql="UPDATE `votos` SET `branco` = $branco WHERE `votos`.`idVotos` = 1";
      $statement = $conexao -> query($sql);
      $conjResult = $statement -> fetchAll();	
	  }
    function setNulo($idVoto){
		  include_once 'conexao.php';
      $conexao = Conexao::getConexao();
		  $this->idVoto=$idVoto;
		  $sql1="SELECT * FROM votos WHERE idVotos='1'";
      $statement = $conexao -> query($sql1);
      $conjResult = $statement -> fetchAll();
      foreach ($conjResult as $linha){
        $nulo=$linha['nulo'];
      }
      $nulo=$nulo+1;
      $sql="UPDATE `votos` SET `nulo` = $nulo WHERE `votos`.`idVotos` = 1";
      $statement = $conexao -> query($sql);
      $conjResult = $statement -> fetchAll(); 	
	  }
  }

  class NBGovernador{
    private $idVoto;
    private $brancoG;
    private $nulo;
    public function __construct ($idVoto,$brancoG,$nulo){
		  $this->idVoto=$idVoto;
		  $this->brancoG=$brancoG;
		  $this->nulo=$nulo;
	  }
	  function setBrancoG($idVoto){
		  include_once 'conexao.php';
      $conexao = Conexao::getConexao();
		  $this->idVoto=$idVoto;
		  $sql1="SELECT * FROM votos WHERE idVotos='2'";
      $statement = $conexao -> query($sql1);
      $conjResult = $statement -> fetchAll();
      foreach ($conjResult as $linha){
        $brancoG=$linha['branco'];
      }
      $brancoG=$brancoG+1;
      $sql="UPDATE `votos` SET `branco` = $brancoG WHERE `votos`.`idVotos` = 2";
      $statement = $conexao -> query($sql);
      $conjResult = $statement -> fetchAll(); 	
	  }
    function setNuloG($idVoto){
		  include_once 'conexao.php';
      $conexao = Conexao::getConexao();
		  $this->idVoto=$idVoto;
		  $sql3="SELECT * FROM votos WHERE idVotos='2'";
      $statement = $conexao -> query($sql3);
      $conjResult = $statement -> fetchAll();
      foreach ($conjResult as $linha){
        $nuloG=$linha['nulo'];
      }
      $nuloG=$nuloG+1;
      $sql="UPDATE `votos` SET `nulo` = $nuloG WHERE `votos`.`idVotos` = 2";
      $statement = $conexao -> query($sql);
      $conjResult = $statement -> fetchAll();	
    }
  }
?>