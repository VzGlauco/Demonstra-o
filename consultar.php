<!DOCTYPE html>
<html lang="pt-br">

	<head>

		<meta charset="UTF-8">

		<title>Home</title>

		
		<?php include 'inc/links.inc'; ?>
		

	</head>

	<body>
		
		<?php include 'inc/sidebar.inc'; ?>
		

		
		<?php include 'inc/header.inc'; ?>
		


        <div class="content col-lg-10">

        	<h2>Consulta</h2>

        	<table class="table table-striped">

	        	<tr>
		            <td class="bold">Codigo</td>
		            <td class="bold">Nome</td>
		            <td class="bold">Sobrenome</td>
		            <td class="bold">Sexo</td>
		            <td class="bold">Data</td>
		            <td class="bold">Email</td>
	            
		        </tr>

		        <?php

		        	include 'consulta.php';
			        
		        ?>
	    	</table>


        </div>

		
		<?php include 'inc/script.inc'; ?>
		
	</body>
</html>