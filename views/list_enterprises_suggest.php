<div class="row">
<div class="col s12 m12 l12 ">

<h3>EMPRESAS SUGERIDAS</h3>
<table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="RFC">RFC</th>
              <th data-field="Nombre">Nombre de la empresa</th>
              <th data-field="Direccion">Direccion</th>
              <th data-field="Telefono">Telefono</th>
              <th data-field="Correo">Correo</th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach ($datos as $data) {
        		echo "<tr>";
	        		echo "<td>".$data['RFC']."</td>";
	        		echo "<td>".$data['nombre']."</td>";
              echo "<td>".$data['direccion']."</td>";
              echo "<td>".$data['telefono']."</td>";
              echo "<td>".$data['correo']."</td>";
              echo "<td><a href='index.php?c=controller&a=updateEstateEnterpriseAlta&rfc=".$data['RFC']."' class='waves-effect waves-light btn z-depth-1'>Dar de alta</a></td>";
              echo "<td><a href='index.php?c=controller&a=deleteSuggesEnterprise&rfc=".$data['RFC']."' class='waves-effect waves-light btn z-depth-1 red'>Eliminar</a></td>";
     		    echo "</tr>";
        	} ?>
        </tbody>
</table>
<div/>
<div/>