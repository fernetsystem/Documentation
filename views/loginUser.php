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
<div class="row">
	<p>Ventana modal</p>
	<a href="#modal1" class="btn modal-trigger">Modal</a>
	<div class="modal" id="modal1">
	<div class="modal-content">
		<h4>Soy una ventana modal</h4>
		<p>Mira me como aparesco, esta ventana sera para el succes del ususario, o del erorr</p>
	</div>
	<div class="modal-footer">
		<div class="action-bar">
			<a href="#" class="btn-flat modal-action modal-close red">Cerrar</a>
		</div>
	</div>

	</div>
</div>
