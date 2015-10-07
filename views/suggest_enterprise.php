<h2>Sugerir empresa</h2>
<div class="row" >
	<div class="col s12 m10 l6 offset-s1 offset-m1 offset-l3">
		<form action="index.php?c=controller&a=registraEnterpriseEs1&nom_emp=nom_emp&tel=tel&email=email; ?>" method="post">
			<div class="row">
				<div class="input-field col s10 m6 l6">
					<input type="text" id="rfc"name="rfc">
					<label for="rfc">RFC:</label>
				</div>
				<div class="input-field col s10 m6 l6">
					<input type="text" id="nom_emp"name="nom_emp">
					<label for="nom_emp">Nombre de la empresa:</label>
				</div>
			</div>
			<div class="row">
			<select name="sec"class="col s10 m12 l12">
			      <option value="" disabled selected>Sector Productivo</option>
			      <option value="1">Publico</option>
			      <option value="2">Privado</option>
			      <option value="3">Social</option>
			</select>
			</div>
			<div class="row">
				<div class="input-field col s10 m12 l6">
					<input type="text" id="dir"name="dir">
					<label for="dir">Dirección:</label>
				</div>
				<div class="input-field col s10 m6 l3">
					<input type="text" id="tel"name="tel">
					<label for="tel">Telefono:</label>
				</div>
				<div class="input-field col s10 m6 l3">
					<input type="text" id="email"name="email">
					<label for="email">Correo:</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Enviar sugerencia</button><br/><br/>
		</form>
	</div>
</div>
