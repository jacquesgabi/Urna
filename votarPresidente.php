<?php
include 'Conexao.php';
$numPresidente=24;
     
  	 class Presidente{

       public function votarPresidente($numPresidente){
        $sql1="SELECT * FROM presidente WHERE numPresidente=$numPresidente";
        $resultado1 = mysqli_query($conexao,$sql1);
        while ($linha=mysqli_fetch_array($resultado1)){$votos=$linha['votos'];}
        $votos = $votos+1;
        $sql="UPDATE `presidente` SET `votos` = '$votos' WHERE `presidente`.`numPresidente` = $numPresidente";
        $resultado = mysqli_query($conexao,$sql);
     
      
         
     }
}

?>