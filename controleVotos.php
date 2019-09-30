<?php
include 'Presidente.php';
include 'votosB.php';
include 'conexao.php';
$numPresidente=$_POST['numPresidente'];



$AceuDispor = new Presidente('AceuDispor','24','PPP','0');
$JoaoRasgado = new Presidente('JoaoRasgado','25','PUPA','0' );
$PranchanaJack = new Presidente('PranchanaJack','81','PS','0');
$branco= new NBPresidente('1','0','0');
$nulo= new NBPresidente('1','0','0');

	if($numPresidente==1000){
   $branco->setBranco(1);
   header( "refresh:2;index.php" );
      echo 'Votou Branco';
      die;
	      }
	if($numPresidente==24){
$AceuDispor->setVoto($numPresidente);
header( "refresh:2;index.php" );
      echo 'Votou Aceu Dispor';
}
	if($numPresidente==25){
$JoaoRasgado->setVoto($numPresidente);
header( "refresh:2;index.php" );
      echo 'João Rasgado';
}
	if($numPresidente==81){
$PranchanaJack->setVoto($numPresidente);
header( "refresh:2;index.php" );
      echo 'Votou em Pranchana Jack';
}
	else{
	$nulo->setNulo(1);
	 header( "refresh:2;index2.php" );
      echo 'Votou Nulo';

}




?>