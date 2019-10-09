<!DOCTYPE html>
<html>
<head>
   <title>Notificação Eleitoral - 2019</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="estilo.css">
   <link rel="icon" type="imagem/png" href="tre.png"/>
</head>
<body>
   <form action="controleVotos.php" method="POST" id="voto">
      <fieldset>
         <h2>Urna Eleitoral - 2019</h2>
         <hr>
         <br>
         <?php
         include_once 'Presidente.php';
         include_once 'Nbpresidente.php';
         include_once 'conexao.php';
         $conexao = Conexao::getConexao();
         $numPresidente=$_POST['numPresidente'];

         $AceuDispor = new Presidente('AceuDispor','24','PPP','0');
         $JoaoRasgado = new Presidente('JoaoRasgado','25','PUPA','0' );
         $PranchanaJack = new Presidente('PranchanaJack','81','PS','0');
         $branco= new NBPresidente('1','0','0');
         $nulo= new NBPresidente('1','0','0');

         
         if($numPresidente==1000){
            $branco->setBranco(1);
            header( "refresh:2;index2.php" );
            echo 'Votou Branco';
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         if($numPresidente==24){
            $AceuDispor->setVoto($numPresidente);
            header( "refresh:2;index2.php" );
            echo 'Votou Aceu Dispor';
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         if($numPresidente==25){
            $JoaoRasgado->setVoto($numPresidente);
            header( "refresh:2;index2.php" );
            echo 'Votou em João Rasgado';
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         if($numPresidente==81){
            $PranchanaJack->setVoto($numPresidente);
            header( "refresh:2;index2.php" );
            echo 'Votou em Pranchana Jack';
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         else{
            $nulo->setNulo(1);
            header( "refresh:2;index2.php" );
            echo 'Votou Nulo';
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         ?>
         <br>
      </fieldset>
   </form>
</body>
</html>
