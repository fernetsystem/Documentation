<?php  foreach ($datos as $dato) {
?>
<div class="row" >
	<div class="col s12 m10 l6 offset-s1 offset-m1 offset-l3">
		<h3>Mis Datos</h3>
		<form action="index.php?c=controller&a=editData&mat=mat&pass=pass&nom=nom&pat=pat&mate=mate&email=email&crp=crp&carr=carr&sex=sex&; ?>" method="post">
			<div class="row">
				<div class="input-field col s10 m6 l6">
					<input type="text" id="mat"name="mat" value=<?php echo $dato['matricula']; ?>>
					<label for="mat">Matricula:</label>
				</div>
				<div class="input-field col s10 m6 l6">
						<input type="password" id="pass"name="pass" value=<?php echo $dato['password']; ?>>
						<label for="password">Contraseña:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s10 m4 l4">
					<input type="text" id="nom"name="nom" value=<?php echo $dato['nombre']; ?>>
					<label for="nom">Nombre:</label>
				</div>
				<div class="input-field col s10 m4 l4">
					<input type="text" id="pat"name="pat" value=<?php echo $dato['paterno']; ?>>
					<label for="pat">Apellido Paterno:</label>
				</div>
				<div class="input-field col s10 m4 l4">
					<input type="text" id="mate"name="mate" value=<?php echo $dato['materno']; ?>>
					<label for="mate">Apellido Materno:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s10 m4 l4">
					<input type="text" id="email"name="email" value=<?php echo $dato['email']; ?>>
					<label for="email">Email:</label>
				</div>
				<div class="input-field col s10 m4 l4">
					<input type="text" id="crp"name="crp" value=<?php echo $dato['curp']; ?>>
					<label for="crp">Curp:</label>
				</div>	
				<div class="col s10 m4 l4" >
					    <input name="sex" type="radio" id="r5" value="H"/>		<label for="r5">Hombre</label><br/>
					    <input name="sex" type="radio" id="r6" value="M"/>		<label for="r6">Mujer</label>
				</div>
			</div>
			<!--FALTA UPDATE EN CARRERA-->
			<div class="row">	
				<select name="carr"class="col s9 m11 l11">
			      <option value="" disabled selected>Selecciona tu carrera</option>
			      <option value="1">Ingeniería industrial</option>
			      <option value="2">Ingeniería mecatrónica</option>
			      <option value="3">Ingeniería en informática</option>
			      <option value="3">Ingeniería en nanotecnología</option>
			      <option value="3">Licenciatura en administración y gestión de PyMES</option>
			    </select>
			</div>
			<?php } ?>
			<button class="btn waves-effect waves-light" type="submit">Cambiar información</button><br/><br/>
		</form>
	</div>
</div>
	