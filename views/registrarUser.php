<h2>Registro</h2>
<div class="row">
	<div class="col s12">
		<form action="index.php?c=controller&a=registraAlumno&mat=mat&email=email&pass=pass&; ?>" method="post">
			<div class="row">
				<div class="input-field col s4">
					<input type="text" id="mat"name="mat">
					<label for="matricula">Ingresa tu matricula:</label>
				</div>
				<div class="input-field col s4">
					<input type="text" id="email"name="email">
					<label for="email">Ingresa tu E-Mail:</label>
				</div>
				<div class="input-field col s4">
					<input type="password" id="pass"name="pass">
					<label for="pass">Ingresa nuevo password:</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Registrar</button>
		</form>
	</div>
</div>
