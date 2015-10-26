<div class="row">
<div class="col s12 m12 l12 ">
<table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="Matricula">Matricula</th>
              <th data-field="Nombre">Nombre</th>
              <th data-field="Paterno">Paterno</th>
              <th data-field="Materno">Materno</th>
              <th data-field="Estado">Estado</th>
              <!--#<th data-field="Total Horas">Total Horas</th>-->
              <th data-field="RFC">RFC</th>
              <th data-field="INICIO">Inicio</th>
              <th data-field="TERMINO">Termino</th>
              <th data-field="Calificación">Calificación</th>
              <th data-field="Nom. Proyecto">Nom. Proyecto</th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach ($datos as $data) {
        		echo "<tr>";
	        		echo "<td>".$data['matricula']."</td>";
	        		echo "<td>".$data['nombre']."</td>";
              echo "<td>".$data['paterno']."</td>";
              echo "<td>".$data['materno']."</td>";
              echo "<td>".$data['estado_pro']."</td>";
              #echo "<td>".$data['total_horas']."</td>";
              echo "<td>".$data['RFC']."</td>";
              echo "<td>".$data['fecha_i']."</td>";
              echo "<td>".$data['fecha_t']."</td>";
              echo "<td>".$data['calificacion']."</td>";
              echo "<td>".$data['nom_proyecto']."</td>";
     		    echo "</tr>";
   
   #nom_encargado
   #puesto_encargado
   #tit_encargado

        	} ?>
        </tbody>
</table>
</div>
</div>