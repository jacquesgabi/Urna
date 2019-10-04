<!DOCTYPE html>
<html meta-charset="utf-8">
<head >
  <title>Resultados da Eleição - 2019</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="icon" type="imagem/png" href="tre.png"/>
</head>
<body>
  <form> 
    <fieldset>
      <h2>Urna Eleitoral - 2019</h2>
      <hr>
      <h3>Presidente</h3>
      <table>
        <colgroup span="4"></colgroup>
        <tr>
          <th>Número</th>
          <th>Presidente</th>
          <th>Partido</th>
          <th>Votos</th>
        </tr>
        <tr>
          <?php  
          include_once 'conexao.php'; 
          $conexao = Conexao::getConexao();
          $sql1="SELECT * FROM Presidente ORDER BY votos desc";
          $statement = $conexao -> query($sql1);
          $conjResult = $statement -> fetchAll(); 
          foreach ($conjResult as $linha){?>
            <tr>
              <td><?php echo $numPresidente=$linha['numPresidente']; ?></td>
              <td><?php echo $nome=$linha['nome'];?></td>
              <td><?php echo $partido=$linha['partido'];?></td>
              <td><?php echo $votos=$linha['votos'];?></td>
            </tr>
          <?php } ?>
        </table>
        <br>
        <table>
          <colgroup span="4"></colgroup>
          <tr>
            <th>Brancos</th>
            <th>Nulos</th>
          </tr>
          <tr>
            <?php  
            include_once 'conexao.php';
            $conexao = Conexao::getConexao();
            $sql1="SELECT * FROM votos WHERE idVotos='1';";
            $statement = $conexao -> query($sql1);
            $conjResult = $statement -> fetchAll();
            foreach ($conjResult as $linha){?>
              <tr>
                <td><?php echo $branco=$linha['branco'] . " "; ?></td>
                <td><?php echo $nulo=$linha['nulo'];?></td>
              </tr>
            <?php } ?>
          </table>
          <br>

          <!-- GOVERNADOR -->
          <hr>
          <h3>Governador</h3>
          <table>
            <colgroup span="4"></colgroup>
            <tr>
              <th>Número</th>
              <th>Governador</th>
              <th>Partido</th>
              <th>Votos</th>
            </tr>
            <tr>
              <?php
              include_once 'conexao.php';
              $conexao = Conexao::getConexao();
              $sql2="SELECT * FROM Governador ORDER BY votos desc";
              $statement = $conexao -> query($sql2);
              $conjResult = $statement -> fetchAll();
              foreach ($conjResult as $linha){?>
                <tr>
                  <td><?php echo $numGovernador=$linha['numGovernador']; ?></td>
                  <td><?php echo $nome=$linha['nome'];?></td>
                  <td><?php echo $partido=$linha['partido'];?></td>
                  <td><?php echo $votos=$linha['votos'];?></td>
                </tr>
              <?php } ?>
            </table>
            <br>
            <table>
              <colgroup span="4"></colgroup>
              <tr>
                <th>Brancos</th>
                <th>Nulos</th>
              </tr>
              <tr>
                <?php  include_once 'conexao.php'; 
                $conexao = Conexao::getConexao();
                $sql1="SELECT * FROM votos WHERE idVotos='2';";
                $statement = $conexao -> query($sql1);
                $conjResult = $statement -> fetchAll();
                foreach ($conjResult as $linha){?>
                  <tr>
                    <td><?php echo $branco=$linha['branco'] . " "; ?></td>
                    <td><?php echo $nulo=$linha['nulo'];?></td>
                  </tr>
              <?php } ?>
        </table>
        <br>
      </fieldset>
    </form>
    <br>
    <br>
    <a href="index.php" id="in">Inicio</a>
  </body>
</html>