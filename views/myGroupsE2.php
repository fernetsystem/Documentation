	<div class="row" >
		<div class="col s12 m10 l6 offset-s1 offset-m1 offset-l3">
			<ul class="collection with-header">
		        <li class="collection-header"><h5>Grupo y periodo</h5></li>
		     	<?php   foreach ($datos as $dataE2) {
			        	echo '<li class="collection-item"><div>'.$dataE2['grupo'].' - '.$dataE2['periodo'].'<a href="index.php?c=controller&a=showIdGroup&idgroup='.$dataE2['idgrupo'].'&; ?" class="secondary-content"><i class="material-icons">ver</i></a></div></li>';
			    } ?>
	      	</ul>
		</div>
	</div>
	<div class="row">
	   	<div class="col s12 m10 l6 offset-s1 offset-m1 offset-l3">
	      	<a href="index.php?c=controller&a=formAddGroup&; ?" class="btn waves-effect waves-light">Crear grupo</a>
	    </div>
	</div>