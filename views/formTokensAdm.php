<h3>Tokens</h3>
<div class="row" >
	<div class="col s12 m10 l6 offset-s1 offset-m1 offset-l3">
		<form action="index.php?c=controller&a=addTokenAsesor&token=token&matr=matr; ?>" method="post">
			<div class="row">
				<div class="input-field col s10 m6 l6">
					<input type="text" id="token"name="token">
					<label for="token">Token:</label>
				</div>
				<div class="input-field col s10 m6 l6">
					<input type="text" id="matr"name="matr">
					<label for="matr">Matricula del asesor:</label>
				</div>
			</div>
			<div class="row ">
			<button class="btn waves-effect waves-light col s10 m4 l4 " type="submit">Agregar token</button><br/><br/>
			</div>
		</form>
	</div>
</div>
