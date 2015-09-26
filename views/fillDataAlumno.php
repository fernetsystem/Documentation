<?php  session_start(); ?>
<h3>Mis Datos</h3>
<div class="row">
	<div class="col s2"></div>
	<div class="col s8">
		<form action="index.php?c=controller&a=fillDataAlumno&mat=mat&nom=nom&pat=pat&mate=mate&crp=crp&te=tel&; ?>" method="post">
			<div class="row">
				<div class="input-field col s6">
					<input disabled value=<?php echo $_SESSION['matr']; ?> type="text" id="mat"name="mat">
					<label for="mat">Matricula:</label>
				</div>
					<div class="input-field col s6">
					<input disabled value=<?php echo $_SESSION['email']; ?> type="text" id="email"name="email">
					<label for="email">Email:</label>
				</div>
				<div class="input-field col s4">
					<input type="text" id="nom"name="nom">
					<label for="nom">Nombre:</label>
				</div>
				<div class="input-field col s4">
					<input type="text" id="pat"name="pat">
					<label for="pat">Apellido Paterno:</label>
				</div>
				<div class="input-field col s4">
					<input type="text" id="mate"name="mate">
					<label for="mate">Apellido Materno:</label>
				</div>
				<div class="input-field col s6">
					<input type="text" id="crp"name="crp">
					<label for="crp">Curp:</label>
				</div>
				<div class="input-field col s6">
					<input type="text" id="tel"name="tel">
					<label for="tel">Telefono:</label>
				</div>
				
			</div>
			<div class="row">	
				<select name="carr"class="s6">
			      <option value="" disabled selected>Selecciona tu carrera</option>
			      <option value="1">Ingenieria en informatica</option>
			      <option value="2">Ingenieria en mecatronica</option>
			      <option value="3">Ingenieria en nanotecnologia</option>
			      <option value="3">Ingenieria industrial</option>
			      <option value="3">Licenciatura en admonistracion</option>
			    </select>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Aceptar</button>
		</form>
	</div>
</div>
