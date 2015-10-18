
<table class="highlight responsive-table">
        <thead>
          <tr>
              <th data-field="Numero de asesor">Numero de asesor</th>
              <th data-field="Token">Token</th>
              <th data-field="Matricula">Matricula</th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach ($datos as $data) {
        		echo "<tr>";
	        		echo "<td>".$data['no_asesor']."</td>";
	        		echo "<td>".$data['token']."</td>";
              echo "<td>".$data['matricula']."</td>";
     		    echo "</tr>";
        	} ?>
        </tbody>
</table>