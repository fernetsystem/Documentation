<h3>Datos de la empresa</h3>
<div class="row" >
	<div class="col s12 m8 l6 offset-s1 offset-m1 offset-l1">
		<form action="index.php?c=controller&a=registraEnterpriseEs1&nom_emp=nom_emp&tel=tel&email=email; ?>" method="post">
			<div class="row">
				<div class="input-field col s10 m8 l8 offset-s1 offset-m4 offset-l6">
					<input type="text" id="nom_emp"name="nom_emp">
					<label for="nom_emp">RFC:</label>
				</div>
				<div class="col s6 m4 l4 offset-s6 offset-m10 offset-l12">
					<a href="index.php?c=controller&a=suggestEnterprise&; ?>">Sugerir empresa</a>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s10 m8 l8 offset-s1 offset-m4 offset-l6">
					<input type="text" id="pro"name="pro">
					<label for="pro">Nombre del proyecto:</label>
				</div>
				<div class="input-field col s10 m8 l8 offset-s1 offset-m4 offset-l6">
					<input type="text" id="nomc"name="nomc">
					<label for="nomc">Nombre de tu encargado:</label>
				</div>
		    	<div class="input-field col s10 m8 l8 offset-s1 offset-m4 offset-l6">
					<input type="text" id="pue"name="pue">
					<label for="pue">Puesto de tu encargado:</label>
				</div>
			</div>
			<div class="row">
				<select name="tit"class="col s10 m8 l8 offset-s1 offset-m4 offset-l6">
			      <option value="" disabled selected>Titulo de tu encargado</option>
			      <option value="1">Ing.</option>
			      <option value="2">Lic.</option>
			    </select>
			</div>
			<div class="row ">
			<button class="btn waves-effect waves-light col s10 m4 l4 offset-s1 offset-m6 offset-l8" type="submit">Enviar datos</button><br/><br/>
			</div>
		</form>
		
	</div>
	<a href='index.php?c=controller&a=formDocumentsEstancias1& ?'; class='waves-effect waves-light btn col s10 m3 l2 offset-s2 offset-m5 offset-l5'>Ver documentos</a>
</div>
