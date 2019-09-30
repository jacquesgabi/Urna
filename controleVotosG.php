<?php 

include 'Governador.php';
include 'votosB.php';
include 'conexao.php';
$numGovernador=$_POST['numGovernador'];
$RonnieNutella= new Governador('Ronnie Nutella','14','pntl','0');
$JoaoDoria= new Governador('João Doria','45','PCC','0');
$JosefinaFiança= new Governador('Josefina Fiança','74','PBB','0');
$branco= new NBGovernador('2','0','0');
$nulo= new NBGovernador('2','0','0');

if($numGovernador==1000){
   $branco->setBrancoG(2);
   header( "refresh:2;index.php" );
      echo 'Votou Branco';
      die;
	      }
	if($numGovernador==14){
$RonnieNutella->setVotoG($numGovernador);
header( "refresh:2;index.php" );
      echo 'Votou Ronnie Nutella';
}
	if($numGovernador==45){
$JoaoDoria->setVotoG($numGovernador);
header( "refresh:2;index.php" );
      echo 'João Doria';
}
	if($numGovernador==74){
$JosefinaFiança->setVotoG($numGovernador);
header( "refresh:2;index.php" );
      echo 'Votou em JosefinaFiança';
}
	else{
	$nulo->setNuloG(2);
	 header( "refresh:2;index.php" );
      echo 'Votou Nulo';

}
?>