<?php if (isset($msg)) {
	echo $msg;
} else { ?>
<table class="table table-bordered">
	<thead>
	    <tr>
		      <th>Título</th>
	    </tr>
	 </thead>
	 <tbody>
		<?php if (isset($noticias)) {
			foreach($noticias as $n) {
				echo "<tr>";
					echo "<td><a href=\"javascript:func()\" onclick=\"exibirConteudo('".$n['id']."')\">".$n['titulo']."</a></td>";
				echo "</tr>";
			}
		}?>
	</tbody>
</table>
<?php } ?>
