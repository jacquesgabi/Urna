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

?>