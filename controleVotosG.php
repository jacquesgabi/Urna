<!DOCTYPE html>
<html>
<head>
   <title>Notificação Eleitoral - 2019</title>
   <link rel="stylesheet" type="text/css" href="estilo.css">
   <link rel="icon" type="imagem/png" href="tre.png"/>
</head>
<body>
   
   <form action="controleVotosG.php" method="POST" id="voto">
      <fieldset>
         <h2>Urna Eleitoral - 2019</h2>
         <hr>
         <br>
         <?php 

         include 'Governador.php';
         include 'Nbgovernador.php';
         include 'Conexao.php';
         $conexao = Conexao::getConexao();
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
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         if($numGovernador==14){
            $RonnieNutella->setVotoG($numGovernador);
            header( "refresh:2;index.php" );
            echo 'Votou Ronnie Nutella';
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         if($numGovernador==45){
            $JoaoDoria->setVotoG($numGovernador);
            header( "refresh:2;index.php" );
            echo 'João Doria';
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         if($numGovernador==74){
            $JosefinaFiança->setVotoG($numGovernador);
            header( "refresh:2;index.php" );
            echo 'Votou em JosefinaFiança';
            echo "<br>";
            echo "<br>";
            echo "Aguarde um momento...";
            echo "<br>";
            echo "<br>";
            die;
         }
         else{
            $nulo->setNuloG(2);
            header( "refresh:2;index.php" );
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
