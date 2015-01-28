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

         
            <div class="col-md-6">
             	
            	<div class="box">
                		
            		<a href="novo.php">
            			<img class="relative" src="img/add139.png"/> 
            		</a>

            		<div class="legend-box">

           				<a href="novo.php">Cadastrar</a>
            
               		</div>	            
          	
        		</div>

           </div>
	       
           <div class="col-md-6">
                		
     			<div class="box">

            		<a href="consultar.php">
            			<img src="img/checkmark15.png" class="relative"/>
            		</a>
            		
            		<div class="legend-box">

            			<a href="consultar.php">Consultar</a>

            		</div>

               	</div>

           </div>
           
        </div>
		
        <?php include 'inc/script.inc'; ?>
		
	</body>
</html>