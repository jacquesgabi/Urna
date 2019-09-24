<!DOCTYPE html>
<html>
	<head>
		<title> Urna Eletrônica </title>
		<meta charset="utf-8">
	</head>

	<body>
		<h1> Votação </h1>
		<form action="Votacao.php" method="post">
			<fieldset>
				<legend> Governador </legend>
				<p> Insira o número de seu candidato: </p>
				<p> Branco = 1  - Nulo = 0 </p>
				<input type="number" name="votoGov"><br>
				<button type="checkbox">Branco</button><button>Confirmar</button><button type="submit"> Enviar </button>
			</fieldset>
		</form>


	</body>
</html>