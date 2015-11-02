
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/materialize.min.js" ></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$("select").material_select();
			$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
		});
	</script>
	</body>
</html>