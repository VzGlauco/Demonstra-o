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
	    	</table>


        </div>

		
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

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