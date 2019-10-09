<!DOCTYPE html>
<html>
<head>
	<title>Urna Eleitoral - 2019</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="icon" type="imagem/png" href="tre.png"/>
</head>
<body>
	<form action="controleVotos.php" method="POST" id="voto">
		<fieldset>
			<h2>Urna Eleitoral - 2019</h2>
			<hr>
			<h3>Presidente</h3>
			<p> Insira o número de seu candidato: </p>
			<fieldset>
				<?php  
          			include_once 'conexao.php'; 
          			$conexao = Conexao::getConexao();
          			$sql1="SELECT * FROM Presidente ORDER BY numPresidente";
          			$statement = $conexao -> query($sql1);
          			$conjResult = $statement -> fetchAll(); 
          			foreach ($conjResult as $linha){
          				echo $nome=$linha['nome'] . " = ";
              			echo $numPresidente=$linha['numPresidente'] . "<br>";
        			} 
        			echo "Branco = 1000<br>";
        			echo "Nulo = Número inexistente";
        		?>
			</fieldset>
			<br>
			<input type="number" name="numPresidente">
			<br><br>
			<button type="submit">Confirmar</button>
			<a href="votosfinais.php">Resultados</a>
		</fieldset>
	</form>
</body>
</html>