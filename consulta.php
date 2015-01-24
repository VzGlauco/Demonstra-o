<?php

	require_once 'funcoes.php';
	conexao();

	$sql = "SELECT * FROM cadastros";
	$linhas = consultar($sql);

	while($campo = mysql_fetch_assoc($linhas)){
		echo ("<tr> <td>". $campo['codigo']. "</td>");
		echo "<td>" . $campo['nome'].  "</td> ";
		echo "<td>" . $campo['sobrenome'].  "</td> ";
		echo "<td>" . $campo['sexo'].  "</td> ";
		echo "<td>" . $campo['data'].  "</td> ";
		echo "<td>" . $campo['email'].  "</td> ";

	}
?>