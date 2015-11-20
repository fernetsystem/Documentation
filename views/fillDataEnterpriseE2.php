<h3>Datos de la empresa</h3>
<div class="row" >
	
		<form action="index.php?c=controller&a=updateProceesE2&rfc=rfc&fi=fi&ft=ft&pro=pro&nomc=nomc&pue=pue&tit=tit&; ?>" method="post">
			<div class="row">
				<div class="col s10 m6 l10 offset-s1 offset-m4 offset-l3">	
				<div class="input-field col s10 m4 l4">
					<input type="date" class="datepicker" id="fi" name="fi" placeholder="Fecha de inicio"/>			
				</div>
				<div class="input-field col s10 m4 l4">
						<input type="date" class="datepicker" id="ft" name="ft" placeholder="Fecha de termino"/>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 m8 l6 offset-s1 offset-m1 offset-l1">
					<div class="row">
						<select name="rfc"class="col s10 m8 l8 offset-s1 offset-m4 offset-l6">
							<option value="" disabled selected>Selecciona el RFC</option>
								<?php  
					                foreach ($datos as $data) {
									   	echo '<option value="'.$data['RFC'].'">'.$data['RFC'].'</option>	';
									}
									echo '</select>';
							    ?>
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
			      <option value="Ing.">Ing.</option>
			      <option value="Lic.">Lic.</option>
			    </select>
			</div>
			<div class="row ">
			<button class="btn waves-effect waves-light col s10 m4 l4 offset-s1 offset-m6 offset-l8" type="submit">Enviar datos</button><br/><br/>
			</div>
			</div>
		</form>
		
	</div>
</div>
