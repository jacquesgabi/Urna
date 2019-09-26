<?php
	$sql;
	$votoPre = $_POST['votoPre'];
	//$votoGov = $_POST['votoGov'];
	$vnulo = 0;
	$vbranco = 0;

	switch ($votoPre) {
		case 0:
			echo "Voto em branco.";
			$vbranco = $vbranco+1;
			break;
		case 24:
			echo "Aceu Dispor - 24HRS";
			break;
		case 25:
			echo "João Rasgado - PUPA";
			break;
		case 81:
			echo "Pranchana Jack - PS";
			break;
		
		default:
			echo "Voto nulo.";// Não lembro o que a gente combinou, se era caso a pessoa digitasse errado, ou digitasse 1
			$vnulo = $vnulo+1;
			break;
	}

	/**switch ($votoGov) {
		case 0:
			echo "Voto em branco.";
			$vbranco=$vbranco+1;
			break;
		case 14:
			echo "Ronnie Nutella - PNTL";
			break;
		case 45:
			echo "João Doria - PCC";
			break;
		case 74:
			echo "Joséfina Fiança - PBB";
			break;
		default:
			echo "Voto nulo.";
			$vnulo = $vnulo+1;
			break;
	}*/
	
?>