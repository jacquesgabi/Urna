<?php
	$sql
	
	$votoGov = $_POST['votoGov'];
	$gov45 = "João Doria";
	$nulo = 0;
	$branco = 0;

	if ($votoGov == 0) {
		echo "Você votou nulo.";
		$nulo = $nulo + 1;
	}
	if ($votoGov == 1) {
		echo "Você votou branco.";
		$branco = $branco + 1;
	}
	if ($votoGov == 13) {
		echo "Você votou em $gov13 para governador.";
	}
?>