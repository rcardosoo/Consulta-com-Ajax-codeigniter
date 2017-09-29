<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Notícias</title>
	<script type="text/javascript" src="<?php echo base_url();?>js/funcs.js" ></script>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" id="contents">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="margin-top: 40px;">
      <div class="panel panel-default">
      	<div class="panel-heading">
      		<label>Pesquisar notícia</label><br>
			<input type="text" class="form-control" id="busca" onkeyup="buscarNoticias(this.value)" />
      	</div>
	
        <div class="panel-body" id="resultado">
            <?= $contents ?>
        </div>
      </div>
    </div>
    <div class="col-md-2"></div>
  </div>
	
	<br />


	<div id="conteudo"></div>

</body>
</html>
