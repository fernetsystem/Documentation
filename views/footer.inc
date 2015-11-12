	
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/materialize.min.js" ></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$("select").material_select();
			$('ul.tabs').tabs();
			$('.modal-trigger').leanModal();
			var slider = document.getElementById('test5');
			  noUiSlider.create(slider, {
			   start: [70],
			   connect: true,
			   step: 1,
			   range: {
			     'min': 0,
			     'max': 10
			   },
			   format: wNumb({
			     decimals: 1
			   })
			  });
		});
	</script>
	</body>
</html>