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

        	<h2>Cadastrar</h2>

            <form method="post" action="cadastro.php" class="form-horizontal">

                <div class="col-form col-lg-12">
                    <div class="col-lg-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" />
                    </div>

                    <div class="col-lg-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" name="sobrenome" id="sobrenome"/>
                    </div>

              	</div>      

                <div class="col-form col-lg-12">
                    <div class="col-lg-2">
                       	
                       
                        <label>Sexo</label><br>
                        <input type="radio" checked name="sexo" value="Masculino" id="masculino">
                        <label for="masculino">Masculino</label> <br/>
                        <input type="radio" name="sexo" value="Feminino" id="feminino">
                        <label for="feminino">Feminino</label> <br/>
                    
                        
               		 </div>



                	<div class="col-lg-5">
                    	<label for="data">Data de Nascimento</label>
                    	<input type="date" class="form-control" name="data" id="data"/>
                	</div>

                    <div class="col-lg-5">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"/>
                    </div>
			
               	</div>

				<div align="center">
               		 <input type="submit" class="button btn btn-default" name="botao"/>
            	</div>

            </form>

        </div>
	   


		<?php include 'inc/script.inc'; ?>

	</body>
</html>