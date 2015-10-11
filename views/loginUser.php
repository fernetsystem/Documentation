<div class="row">
    <div class="col s12 m16 l6 offset-s1 offset-m3 offset-l4">
    	<h3>Iniciar sesion</h3>
		<form action="index.php?c=controller&a=valida&mat=mat&pass=pass; ?>" method="post">
			<div class="row">
			<div class="input-field col s10 m6 l6">
				<input type="text" id="mat"name="mat">
				<label for="mat">Matricula:</label>
			</div>
			</div>
			<div class="row">
				<div class="input-field col s10 m6 l6">
						<input type="password" id="pass"name="pass">
						<label for="password">Contraseña:</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Ingresar</button>
		</form>
    </div>
</div>
<div class="row">
	<div class="col s12 m16 l6 offset-s1 offset-m3 offset-l4">
		<div class="col l2 m2 s12">
			<a href="index.php?c=controller&a=formAddAlum&;?>">Registrate</a>
		</div>
		<div class="col l4 m4 s12 offset-m1 offset-l1 "> 
			<a href="index.php?c=controller&a=formRecoverPass&;?>">Recuperar contraseña</a>
		</div>
	</div>
</div>
