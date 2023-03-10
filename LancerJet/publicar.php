<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LancerJet</title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="images/jet.png">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
</head>

<style>
	.image-container {
		background-color: #F0F1FF;
		background-size: cover;
	}
</style>

<body>

	<!-- menu -->

	<?php include_once('includes/menu.php') ?>

	<div class="container-fluid image-container pt-5 pb-5" style="color: #1F2833;">
		<h1 class="text-center mb-2 pt-5">Podes publicar aqui os teus anúncios</h1>
		<h5 class="text-center pb-5">Segue os seguintes passos e submete o teu projeto!</h5>
		<div class="row">
			<div class="col-lg-4 text-center">
				<img class="img-fluid" src="images/publica.png" alt="">
			</div>
			<div class="col-lg-8 text-center">
				<form id="form-anuncios" class="central-content bordered-div text-center" style="width: 75%;" action="submit.php" method="post">
					<div class="mx-4 mb-3">
						<input type="text" class="form-control align-center" placeholder="Nome Completo" id="nome_completo" name="nome_completo" required>
					</div>
					<div class="mx-4 mb-3">
						<input type="text" class="form-control" placeholder="Nome do Projeto" id="nome_projeto" name="nome_projeto" required>
					</div>
					<div class="mx-4 mb-3">
						<select class="form-select" id="tipo" name="tipo">
							<option value="" disabled selected>Tipo:</option>
							<option value="software1">Software</option>
							<option value="aplicacao1">Aplicação</option>
							<option value="website1">Website</option>
						</select>
					</div>
					<div class="mx-4 mb-3" style="text-align: left;">
						<label class="mb-2" for="" >Linguagem:</label>
						<select class="form-select" id="linguagem" name="linguagem[]" multiple>
								<option value="JavaScript">JavaScript</option>
								<option value="HTML">HTML</option>
								<option value="CSS">CSS</option>
								<option value="Python">Python</option>
								<option value="C">C</option>
								<option value="C#">C#</option>
								<option value="C++">C++</option>
								<option value="Java">Java</option>
								<option value="PHP">PHP</option>
								<option value="Ruby">Ruby</option>
								<option value="Swift">Swift</option>
								<option value="SQL">SQL</option>
								<option value="GO">Go</option>
								<option value="Kotlin">Kotlin</option>
								<option value="Rust">Rust</option>
								<option value="Scala">Scala</option>
								<option value="Perl">Perl</option>
								<option value="R">R</option>
								<option value="Haskell">Haskell</option>
								<option value="Matlab">Matlab</option>
								<option value="Typescript">TypeScript</option>
						</select>
					</div>
					<div class="mx-4 mb-3">
						<textarea class="form-control" style="height: 100px;" placeholder="Descrição do Projeto" id="descricao" name="descricao" required></textarea>
					</div>
					<div class="mx-4 mb-3">
						<input type="text" class="form-control" placeholder="Contacto (ex: Mail/Número telemóvel" id="contacto" name="contacto" required>
					</div>
					<div class="mx-4 mb-3">
						<input type="text" class="form-control" placeholder="Orçamento" id="orcamento" name="orcamento" required>
					</div>
					<button type="submit" class="btn py-md-3 mt-5 px-md-5 rounded-pill mb-4">Publicar</button>
				</form>
			</div>		
		</div>
	</div>

	<!-- rodape -->

	<?php include_once('includes/rodape.php') ?>

	<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
	<script>
    new MultiSelectTag('linguagem')  
	</script>

</body>

</html>