<!DOCTYPE html>
<html>
  <head>
	  <title>Resultados</title>
    <meta charset="utf-8">
  </head>
  <body>
	
    <table>
      <colgroup span="4"></colgroup>
      <tr>
        <th>Número</th>
        <th>Presidente</th>
        <th >Partido</th>
        <th>Votos</th>
</tr>
<tr>
	<?php  include 'conexao.php'; 
      $sql1="SELECT * FROM Presidente ORDER BY votos desc";
        $resultado1 = mysqli_query($conexao,$sql1);
        while ($linha=mysqli_fetch_array($resultado1)){?>
<tr>
<td><?php echo $numPresidente=$linha['numPresidente']; ?></td>
<td><?php echo $nome=$linha['nome'];?></td>
<td><?php echo $partido=$linha['partido'];?></td>
<td><?php echo $votos=$linha['votos'];?></td>
</tr>
<?php } ?>
</table>
<table>
<colgroup span="4"></colgroup>
<tr>
<th>Brancos</th>
<th>Nulos</th>
</tr>
<tr>
	<?php  include 'conexao.php'; 
      $sql1="SELECT * FROM votos WHERE idVotos='1';";
        $resultado1 = mysqli_query($conexao,$sql1);
        while ($linha=mysqli_fetch_array($resultado1)){?>
<tr>
<td><?php echo $branco=$linha['branco']; ?></td>
<td><?php echo $nulo=$linha['nulo'];?></td>
</tr>
<?php } ?>
</table>
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
      $sql2="SELECT * FROM Governador ORDER BY votos desc";
        $resultado2 = mysqli_query($conexao,$sql2);
        while ($linha=mysqli_fetch_array($resultado2)){?>
<tr>
<td><?php echo $numGovernador=$linha['numGovernador']; ?></td>
<td><?php echo $nome=$linha['nome'];?></td>
<td><?php echo $partido=$linha['partido'];?></td>
<td><?php echo $votos=$linha['votos'];?></td>
</tr>
<?php } ?>
</table>
<table>
<colgroup span="4"></colgroup>
<tr>
<th>Brancos</th>
<th>Nulos</th>
</tr>
<tr>
	<?php  include 'conexao.php'; 
      $sql1="SELECT * FROM votos WHERE idVotos='2';";
        $resultado1 = mysqli_query($conexao,$sql1);
        while ($linha=mysqli_fetch_array($resultado1)){?>
<tr>
<td><?php echo $branco=$linha['branco']; ?></td>
<td><?php echo $nulo=$linha['nulo'];?></td>
</tr>
<?php } ?>
</table>
<a href="index.php">Início</a>
</body>
</html>