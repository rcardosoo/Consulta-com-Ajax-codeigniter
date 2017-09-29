<?php if (isset($msg)) {
} else { ?>
<div class="container" id="noticiainfo">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-info">
			<div class="panel-heading">
				<?php echo $noticia['titulo']; ?>
			</div>

			<div class="panel-body">
				<p><?php echo $noticia['conteudo']; ?></p>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>
<?php } ?>

