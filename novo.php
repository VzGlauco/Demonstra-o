<!DOCTYPE html>
<html lang="pt-br">

	<head>

		<meta charset="UTF-8">

		<title>Home</title>

		<!-- Links -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<link rel="stylesheet" href="css/style.css">

		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600' rel='stylesheet' type='text/css'>
		<!-- Fim Links -->

	</head>

	<body>
		
		<div class="sidebar col-lg-2">
			
			<nav>	
				<ul>
			
					<li class="profile">

			            <img class="profile-img" src="img/icon-user.png" alt=""/>
			            <br/>
			            Bem Vindo

			        </li>

					<a href="index.html">
						<li class="nav-item">
							Home
						</li>
					</a>

					<a href="novo.php">
						<li class="nav-item">
							Cadastrar
						</li>
					</a>

					<a href="consultar.php">
						<li class="nav-item">
							Consultar
						</li>
					</a>

				</ul>
			</nav>

			<span class="shadows"></span>

		</div>
		

		
		<div class="header col-lg-10">
				
			<header>

				<a class="toggle" href="#">

					<img class="icon-menu" class=" pull-left" src="img/icon-menu.png" alt="Menu">

				</a>

				<br class="clear"></br>

			</header>
						
		</div>
		


        <div class="content col-lg-10">

        	<h2>Cadastrar</h2>

            <form method="post" action="" class="form-horizontal">

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
		

            <?php

                require_once 'funcoes.php';

                conexao();

                if(isset($_POST['botao'])) { 
                    $nome = $_POST['nome'];
                    $sobrenome = $_POST['sobrenome'];
                    $sexo = $_POST['sexo'];
                    $data = $_POST['data'];
                    $email = $_POST['email'];

                    $sql = "INSERT INTO `cadastros`(`nome`, `sobrenome`, `sexo`, `data`, `email`) VALUES ('$nome','$sobrenome','$sexo','$data','$email')";

                    adicionar($sql);
    			}
            ?>


           
		
		</div>
	


		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<script type="text/javascript">

			$(document).ready(function(){

				$(".toggle").click(function(){

					$(".sidebar").animate({width: 'toggle'},200,function(){
					$(".content").toggleClass("col-lg-10").toggleClass("col-lg-12");
					$(".header").toggleClass("col-lg-10").toggleClass("col-lg-12");
					});
				});


				$(".nav-item").mouseover(function(){
					$(this).animate({paddingLeft: '+=20px'},100).addClass("active");
				});
				$(".nav-item").mouseout(function(){
					$(this).animate({paddingLeft: '-=20px'},100).removeClass("active");;
				});
			});

		</script>
	</body>
</html>