<?php
include 'Presidente.php';
include 'conexao.php';
$numPresidente=$_POST['numPresidente'];


$AceuDispor = new Presidente('AceuDispor','24','PPP','0');
$JoaoRasgado = new Presidente('JoaoRasgado','25','PUPA','0' );
$PranchanaJack = new Presidente('PranchanaJack','81','PS','0');

if($numPresidente==24){

$AceuDispor->setVoto($numPresidente);
}
if($numPresidente==25){



}



?>