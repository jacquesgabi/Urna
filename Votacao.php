<?php
	session_start();//Uma nova sessão de usuário é iniciada.

	include "conexao.php";
	$votoPre = $_POST['votoPre'];
	//$votoGov = $_POST['votoGov'];

	if ($votoPre==1000)  {
		$sql111="SELECT * FROM votos where idVotos=1";
		$resultado111 = mysqli_query($conexao,$sql111);
		while ($linha = mysqli_fetch_array($resultado111)) {
			$brancos=$linha['branco'];
			$brancos=$brancos+1;
			$sql13="UPDATE `votos` SET `branco` = $brancos WHERE `votos`.`idVotos` = 1;";
			$resultado = mysqli_query($conexao,$sql13);
			echo"<script language='javascript' type='text/javascript'>
			alert('voto contabilizado como branco para presidente');
			window.location.href='governador.php';</script>";
			die();
		}
	}

	$sql2="SELECT * FROM `presidente` WHERE numPresidente=$votoPre";
	$resultado12 = mysqli_query($conexao,$sql2);
	$cont =  mysqli_num_rows ($resultado12);


	if ($cont==0)  {
		$sql11="SELECT * FROM votos where idVotos=1";
		$resultado11 = mysqli_query($conexao,$sql11);
	while ($linha = mysqli_fetch_array($resultado11)) {
		$nulo=$linha['nulo'];
	}

	$nulo=$nulo+1;

	$sql1="UPDATE `votos` SET `nulo` = $nulo WHERE `votos`.`idVotos` = '1';";
	$resultado = mysqli_query($conexao,$sql1);
	echo"<script language='javascript' type='text/javascript'>
	alert('voto contabilizado como nulo para presidente');
	window.location.href='governador.php';</script>";


}elseif ($cont!=0) {
	$sql="SELECT * FROM `presidente` where numPresidente=$votoPre";
	$resultado = mysqli_query($conexao,$sql);
	while ($linha = mysqli_fetch_array($resultado)) {
		$nome=$linha['nome'];
		$numPresidente=$linha['numPresidente'];
		$partido=$linha['partido'];
		$votos=$linha['votos'];}
		$votos=$votos+1;
		$sql10="UPDATE `presidente` SET `votos` = $votos WHERE `presidente`.`numPresidente` = $votoPre;";
		$resultado = mysqli_query($conexao,$sql10);
	}if ($cont==0)  {
		echo"<script language='javascript' type='text/javascript'>
		alert('voto contabilizado como nulo');
		window.location.href='governador.php';</script>";


	}

	echo"<script language='javascript' type='text/javascript'>
	alert('$nome');
	window.location.href='voto.php';</script>";

	
	?>