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