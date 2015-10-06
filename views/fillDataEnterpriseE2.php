<h2>Datos de la empresa</h2>
<div class="row" >
	<div class="col s6 m6 l12">
		<form action="index.php?c=controller&a=registraEnterpriseEs1&nom_emp=nom_emp&tel=tel&email=email; ?>" method="post">
			<div class="row">
				<div class="input-field col s4 m4 l6">
					<input type="text" id="nom_emp"name="nom_emp">
					<label for="nom_emp">Nombre de la empresa:</label>
				</div>
				<div class="input-field col s4 m4 l2">
					<input type="text" id="tel"name="tel">
					<label for="tel">Telefono:</label>
				</div>
				<div class="input-field col s4 m4 l2">
					<input type="text" id="email"name="email">
					<label for="email">Correo:</label>
				</div>
			</div>
			<div class="row">
			<select name="sec"class="col s10">
			      <option value="" disabled selected>Sector Productivo</option>
			      <option value="1">Publico</option>
			      <option value="2">Privado</option>
			      <option value="3">Social</option>
			</select>
			</div>
			<div class="row">
				<div class="input-field col s8 m6 l4">
					<input type="text" id="dir"name="dir">
					<label for="dir">Dirección:</label>
				</div>
				<div class="input-field col s8 m6 l4">
					<input type="text" id="pro"name="pro">
					<label for="pro">Nombre del proyecto:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s8 m6 l4">
					<input type="text" id="nomc"name="nomc">
					<label for="nomc">Nombre de tu encargado:</label>
				</div>
		    	<div class="input-field col s8 m6 l4">
					<input type="text" id="pue"name="pue">
					<label for="pue">Puesto de tu encargado:</label>
				</div>
			</div>
			<div class="row">
				<select name="tit"class="col s10">
			      <option value="" disabled selected>Titulo de tu encargado</option>
			      <option value="1">Ing.</option>
			      <option value="2">Lic.</option>
			    </select>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Enviar datos</button><br/><br/>
		</form>
		<a href='index.php?c=controller&a=formDocumentsEstancias1& ?'; class='waves-effect waves-light btn'>Ver documentos</a>
	</div>
</div>
