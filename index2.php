<!DOCTYPE html>
<html>
<head>
	<title>Urna Eleitoral - 2019</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" type="imagem/png" href="tre.png"/>
</head>
<body>
	<form action="controleVotosG.php" method="POST" id="voto">
		<fieldset>
			<h2>Urna Eleitoral - 2019</h2>
			<hr>
			<h3>Governador</h3>
			<p> Insira o número de seu candidato: </p>
			<fieldset>
				<?php  
          			include_once 'conexao.php'; 
          			$conexao = Conexao::getConexao();
          			$sql1="SELECT * FROM Governador ORDER BY numGovernador";
          			$statement = $conexao -> query($sql1);
          			$conjResult = $statement -> fetchAll(); 
          			foreach ($conjResult as $linha){
          				echo $nome=$linha['nome'] . " = ";
              			echo $numPresidente=$linha['numGovernador'] . "<br>";
        			} 
        			echo "Branco = 1000<br>";
        			echo "Nulo = Número inexistente";
        		?>
			</fieldset>
			<br>
			<input type="number" name="numGovernador"><br><br>
			<button type="submit">Confirmar</button>
		</fieldset>
	</form>
</body>
</html>