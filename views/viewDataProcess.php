
<div class="row" >
	<div class="container">
		<h4>Proyecto</h4>
		<?php 
		foreach ($datos as $data) {
			echo "idproceso: ".$data['idproceso']."<br/>";
			echo "Matricula: ".$data['matricula']."<br/>";
			echo "RFC: ".$data['RFC']."<br/>";
			echo "Fecha de inicio: ".$data['fecha_i']."<br/>";
			echo "Fecha de termino: ".$data['fecha_t']."<br/>";
			echo "Nombre del proyecto: ".$data['nom_proyecto']."<br/>";
			echo "Nombre del encargado: ".$data['nom_encargado']."<br/>";
			echo "Puesto del encargado: ".$data['puesto_encargado']."<br/>";
			echo "Titulo del encargado: ".$data['tit_encargado']."<br/>";
		
	echo "	<br/>";
	echo "		<a href='index.php?c=controller&a=generateDocuments&proc=".$data['idproceso']."' class='btn waves-effect waves-light'>Validar</a>Agregar ventana modal y bloquear boton al generar documentos";
			}

		?>
		</div>
	
</div>
