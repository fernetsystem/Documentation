<h3>DOCUMENTOS ESTANCIAS 1</h3>
<table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="Documento">DOCUMENTO</th>
              <th data-field="Formato">FORMATO</th>
              <th data-field="Estado">ESTADO</th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach ($datos as $data) {
        		echo "<tr>";
	        		echo "<td>".$data['documento']."</td>";
	        		echo "<td>".$data['formato']."</td>";
	        		#echo "<td>".$data['estado']."</td>";
	        		echo "<td><a href='#' class='waves-effect waves-light btn z-depth-1' style='height:35px;'>Ver</a></td>";

        		echo "<td>";
        	} ?>
        </tbody>
</table>
