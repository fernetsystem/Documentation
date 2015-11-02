<div class="container">
<h3>Mis documentos</h3>
<table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="Documento">DOCUMENTO</th>
              <th data-field="Estado">ESTADO</th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach ($datos as $data) {
        		echo "<tr>";
	        		echo "<td>".$data['documento']."</td>";
	        		echo "<td>".$data['estado_doc']."</td>";
	        		echo "<td><a href='index.php?c=controller&a=printNdoc&no_documento=".$data['iddocumento']."' class='waves-effect waves-light btn z-depth-1'>Ver</a></td>";
        		echo "<tr>";
        	} ?>
        </tbody>
</table>
</div>
