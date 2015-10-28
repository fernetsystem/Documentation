<div class="row" >
	<div class="col s12 m10 l6 offset-s1 offset-m3 offset-l5">
		<br/><h4>Calificar</h4>
		<form action="index.php?c=controller&a=updateProcE1Calfc&mat=mat&calf=calf; ?>" method="post">
		
			<div class="row">
				<div class="input-field col s10 m10 l6">
					<p>Matricula: <?php echo $matriculaDelAlumno; ?></p>
					<p>Nombre: <?php echo $nombreDelAlumno; ?></p>
				</div>
				<div class="input-field col s10 m6 l6">
					<input type="hidden" id="mat"name="mat" value=<?php echo $matriculaDelAlumno; ?>>
				</div>
			</div>
	
			<div class="row">
				<div class="range_field">
			 		<input type="range" name="calf" min="0" max="10" class="col s10 m6 l6"/>
			 	</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Aceptar</button><br/><br/>
		</form>
	</div>
</div>