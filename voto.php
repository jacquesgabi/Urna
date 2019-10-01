<?php
  include 'conexao.php';
  //Iniciando a sessão:
  if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }
  $numPresidente= $_SESSION['numPresidente'];
  $sql="SELECT * FROM `presidente` where numPresidente=$numPresidente";
	$resultado = mysqli_query($conexao,$sql);

	while ($linha = mysqli_fetch_array($resultado)) {
    $nome=$linha['nome'];
    $numPresidente=$linha['numPresidente'];
    $partido=$linha['partido'];
    $votos=$linha['votos'];
  }

  $votos=$votos+1;
  $sql1="UPDATE `presidente` SET `votos` = $votos WHERE `presidente`.`numPresidente` = $numPresidente;";
  $resultado = mysqli_query($conexao,$sql1);
    
  echo"<script language='javascript' type='text/javascript'>
    alert('voto contabilizado');
    window.location.href='index.php';</script>";



?>