<div class="row">
    <div class="col s12 m16 l6 offset-s1 offset-m3 offset-l4">
    	<h3>Nuevo grupo</h3>
		<form action="index.php?c=controller&a=addGroupAsesor&group=group&per=per; ?>" method="post">
			<div class="row">
			<div class="input-field col s10 m6 l6">
				<input type="text" id="group"name="group">
				<label for="group">Grupo:</label>
			</div>
			</div>
			<div class="row">
				<div class="input-field col s10 m6 l6">
						<input type="text" id="per"name="per">
						<label for="per">Periodo:</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Aceptar</button>
		</form>
    </div>
</div>