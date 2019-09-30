<?php

echo '<meta charset="utf-8">';
	$bdServidor = '127.0.0.1';
	$bdUsuario = 'root';
	$bdSenha = '';
	$bdBanco = 'urna';
	$conexao = mysqli_connect($bdServidor,$bdUsuario,$bdSenha,$bdBanco);

	if (!$conexao){
		echo "Problemas para conectar no banco. Erro: ";
		echo mysqli_connect_error();
		//string that describes the error.
		//string vaiza, não ocorreu o erro.
	}
 ?>