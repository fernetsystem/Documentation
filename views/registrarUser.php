
<div class="row">
    <div class="col s12 m10 l6 offset-s1 offset-m1 offset-l3">
    	<h2 class="center-align">Registro</h2>	
      <ul class="tabs">
        <li class="tab col s2"><a class="active" href="#test1">ALUMNO</a></li>
        <li class="tab col s2"><a href="#test2">ASESOR</a></li>
      </ul>
    </div>
</div>
    <div id="test1" class="col s12">	
	<div class="row" >
		<div class="col s12 m10 l6 offset-s1 offset-m1 offset-l3">
			<form action="index.php?c=controller&a=registraAlumno&mat=mat&pass=pass&nom=nom&pat=pat&mate=mate&email=email&crp=crp&carr=carr&sex=sex&; ?>" method="post">
				<div class="row">
					<div class="input-field col s10 m6 l6">
						<input type="text" id="mat"name="mat">
						<label for="mat">Matricula:</label>
					</div>
					<div class="input-field col s10 m6 l6">
							<input type="password" id="pass"name="pass">
							<label for="password">Contraseña:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10 m4 l4">
						<input type="text" id="nom"name="nom">
						<label for="nom">Nombre:</label>
					</div>
					<div class="input-field col s10 m4 l4">
						<input type="text" id="pat"name="pat">
						<label for="pat">Apellido Paterno:</label>
					</div>
					<div class="input-field col s10 m4 l4">
						<input type="text" id="mate"name="mate">
						<label for="mate">Apellido Materno:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10 m4 l4">
						<input type="text" id="email"name="email">
						<label for="email">Email:</label>
					</div>
					<div class="input-field col s10 m4 l4">
						<input type="text" id="crp"name="crp">
						<label for="crp">Curp:</label>
					</div>	
					<div class="col s10 m4 l4" >
					    <input name="sex" type="radio" id="r1" value="H"/>		<label for="r1">Hombre</label><br/>
					    <input name="sex" type="radio" id="r2" value="M"/>		<label for="r2">Mujer</label>
					</div>
				</div>
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
				<button class="btn waves-effect waves-light" type="submit">Registrar</button><br/><br/>
			</form>
		</div>
	</div>
    </div>

	<div id="test2" class="col s12">	
	<div class="row" >
		<div class="col s12 m10 l6 offset-s1 offset-m1 offset-l3">
			<form action="index.php?c=controller&a=registraAsesor&token=token&mat=mat&pass=pass&nom=nom&pat=pat&mate=mate&email=email&carr=carr&crp=crp&sex=sex&; ?>" method="post">
				<div class="row">
					<div class="input-field col s10 m12 l12">
						<input type="text" id="token"name="token">
						<label for="token">Token:</label>
					</div>
				</div>	
				<div class="row">
					<div class="input-field col s10 m6 l6">
						<input type="text" id="mat"name="mat">
						<label for="mat">Matricula:</label>
					</div>
					<div class="input-field col s10 m6 l6">
							<input type="password" id="pass"name="pass">
							<label for="password">Contraseña:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10 m4 l4">
						<input type="text" id="nom"name="nom">
						<label for="nom">Nombre:</label>
					</div>
					<div class="input-field col s10 m4 l4">
						<input type="text" id="pat"name="pat">
						<label for="pat">Apellido Paterno:</label>
					</div>
					<div class="input-field col s10 m4 l4">
						<input type="text" id="mate"name="mate">
						<label for="mate">Apellido Materno:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s10 m4 l4">
						<input type="text" id="email"name="email">
						<label for="email">Email:</label>
					</div>
					<div class="input-field col s10 m4 l4">
						<input type="text" id="crp"name="crp">
						<label for="crp">Curp:</label>
					</div>	
					<div class="col s10 m4 l4" >
					    <input name="sex" type="radio" id="r3" value="H"/>		<label for="r3">Hombre</label><br/>
					    <input name="sex" type="radio" id="r4" value="M"/>		<label for="r4">Mujer</label>
					</div>
				</div>
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
				<button class="btn waves-effect waves-light" type="submit">Registrar</button><br/><br/>
			</form>
		</div>
	</div>
    </div>