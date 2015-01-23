
        <div class="conteudo col-lg-10">

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

			        require_once('funcoes.php');
			        conexao();

			        $sql = "SELECT * FROM cadastros";
			        
			        while($campo = mysql_fetch_assoc($linhas)){
			            echo ("<tr> <td>". $campo['codigo']. "</td>");
			            echo "<td>" . $campo['nome'].  "</td> ";
			            echo "<td>" . $campo['sobrenome'].  "</td> ";
			            echo "<td>" . $campo['sexo'].  "</td> ";
			            echo "<td>" . $campo['assunto'].  "</td> ";
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
					$(".conteudo").toggleClass("col-lg-10").toggleClass("col-lg-12");
					$(".header").toggleClass("col-lg-10").toggleClass("col-lg-12");
					});
				});


				$(".nav-item").mouseover(function(){
					$(this).animate({paddingLeft: '+=20px'},100).addClass("ativo");
				});
				$(".nav-item").mouseout(function(){
					$(this).animate({paddingLeft: '-=20px'},100).removeClass("ativo");;
				});
			});

		</script>
	</body>
</html>