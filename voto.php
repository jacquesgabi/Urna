<?php
include_once 'conexao.php';
$conexao = Conexao::getConexao();

  $numPresidente= $_SESSION['numPresidente'];
 $sql="SELECT * FROM `presidente` where numPresidente=$numPresidente";
			$statement = $conexao -> query($sql);
    $conjResult = $statement -> fetchAll();

	 foreach ($conjResult as $linha){
        $nome=$linha['nome'];
        $numPresidente=$linha['numPresidente'];
        $partido=$linha['partido'];
      $votos=$linha['votos'];
  }
      $votos=$votos+1;
      $sql1="UPDATE `presidente` SET `votos` = $votos WHERE `presidente`.`numPresidente` = $numPresidente;";
      $statement = $conexao -> query($sq);
    $conjResult = $statement -> fetchAll();
    
    echo"<script language='javascript' type='text/javascript'>
        alert('voto contabilizado');
        window.location.href='index.php';</script>";



?>