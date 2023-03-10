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
</head>

<body>

	<!-- menu -->

	<?php include_once('includes/menu.php') ?>

	<!-- carrosel de imagens -->

	<div id="carousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/carousel/carousel5.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Publica novos trabalhos</h5>
					<div class="slider-btn">
						<a class="btn btn-2" href="publicar.php" role="button">Publicar</a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/carousel/carousel8.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Encontra o teu trabalho</h5>
					<div class="slider-btn">
						<a class="btn btn-2" href="procurar.php" role="button">Procurar</a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/carousel/carousel6.png" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Encontra as melhores publicações</h5>
					<div class="slider-btn">
						<a class="btn btn-2" href="publicaçoes.php" role="button">Publicações</a>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- Introdução -->

	<div class="container-fluid p-0 pb-3" style="background-color: #F0F1FF">
		<div class="row g-0">
			<div class="col-lg-6 py-6 px-5">
				<div class="py-5 px-5">
					<h1 class="mb-4 mt-4">Bem-vindo ao <span class="" style="color: #1F2833;">LancerJet</span></h1>
					<h4 class="mb-4" style="color: #1F2833;">Procura a tua linguagem de eleição e trabalha com a mesma.
					</h4>
					<p class="mb-1">Este website tem como finalidade relacionar empresas e trabalhadores na área da
						programação, onde estes podem publicar e procurar trabalhos/projetos satisfazendo necessidades
						de outros, acabando por-se complementarem.</p>
					<p class="mb-4">Descobre mais sobre as linguagens existentes no LancerJet.</p>
					<a href="procurar.php" class="btn py-md-3 mt-5 px-md-5 rounded-pill" style="background-color: #1F2833; color: #F0F1FF;">Dá uma vista de olhos.</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="nv h-100 d-flex flex-column justify-content-center p-5">
					<div class="d-flex mb-5">
						<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white rounded-circle mx-auto mb-4"
							style="width: 60px; height: 60px;">
							<i class="fas fa-search fs-4" style="color: #1F2833;"></i>
						</div>
						<div class="ps-4">
							<h3>Procura</h3>
							<p class="mb-0">Encontra no LancerJet o trabalho/projeto ideal para ti, há centenas de
								trabalhos ideiais para ti, escolhe a linguagem que preferes!</p>
						</div>
					</div>
					<div class="d-flex mb-5">
						<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white rounded-circle mx-auto mb-4"
							style="width: 60px; height: 60px;">
							<i class="fas fa-code fs-4" style="color: #1F2833;"></i>
						</div>
						<div class="ps-4">
							<h3>Programa</h3>
							<p class="mb-0">Escreve o teu código em função do trabalho discutido e tem a certeza que o
								mesmo vai de acordo com o pedido, não percas tempo e começa já.</p>
						</div>
					</div>
					<div class="d-flex">
						<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white rounded-circle mx-auto mb-4"
							style="width: 60px; height: 60px;">
							<i class="fas fa-upload fs-4" style="color: #1F2833;"></i>
						</div>
						<div class="ps-4">
							<h3>Publica</h3>
							<p class="mb-0">Publica a pasta do projeto no teu GitHub, ou outra plataforma, em privado,
								de modo a garantir que a outra pessoa consiga aceder tranquilamente.</p>
						</div>
					</div>
					<div class="d-flex mt-5">
						<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white rounded-circle mx-auto mb-4"
							style="width: 60px; height: 60px;">
							<i class="fas fa-wallet fs-4" style="color: #1F2833;"></i>
						</div>
						<div class="ps-4">
							<h3>Recebe</h3>
							<p class="mb-0">Depois de todo o teu trabalho serás recompensado pelo mesmo, podes sempre
								receber o dinherio através de MBway, transferência direta ou mesmo em mão!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- trabalhos -->

	<div class="container-fluid pb-5" style="background-color: #F0F1FF;">
		<div class="text-center pb-3 fs-1 fst-italic pt-5 mb-4">Trabalhos Populares</div>
		<div class="row pt-3">
			<div class="col text-center">
				<div class="py-4">
					<img src="images/tp/streaming.png" style="width: 250px;" alt="">
				</div>
				<div class="fs-5 mt-2 text-uppercase">Streaming</div>
				<button class="btn text-primary more-info-btn">Saber mais</button>
				<div class="more-info-text mx-5 my-2 fst-italic" style="display:none; color: #1F2833">
					A linguagem mais comum na programação de streaming é C#, procura o que temos publicado e escolhe o
					projeto ideal para ti!
				</div>
			</div>
			<div class="col text-center">
				<div class="py-4">
					<img src="images/tp/wordpress.png" style="width: 250px;" alt="">
				</div>
				<div class="fs-5 mt-2 text-uppercase">WordPress</div>
				<button class="btn text-primary more-info-btn">Saber mais</button>
				<div class="more-info-text mx-5 my-2 fst-italic" style="display:none; color: #1F2833">
					Para a programação relacionada com o WordPress a linguagem mais comum é o PHP. Vê os projetos que temos 
					e encontro algum relacionado com este tema!
				</div>
			</div>
			<div class="col text-center">
				<div class="py-4">
					<img src="images/tp/socialmedia.png" style="width: 250px;" alt="">
				</div>
				<div class="fs-5 mt-2 text-uppercase">SocialMedia</div>
				<button class="btn text-primary more-info-btn">Saber mais</button>
				<div class="more-info-text mx-5 my-2 fst-italic" style="display:none; color: #1F2833">
					Podes usar, praticamente, qualquer linguagem, não há uma mais apropriada, é uma escolha de gostos.
					As linguagens mais frequentes são: PHP, Java, C#, Python e Ruby !
				</div>
			</div>
			<div class="col text-center">
				<div class="py-4">
					<img src="images/tp/video.png" style="width: 250px;" alt="">
				</div>
				<div class="fs-5 mt-2 text-uppercase">Video</div>
				<button class="btn text-primary more-info-btn">Saber mais</button>
				<div class="more-info-text mx-5 my-2 fst-italic" style="display:none; color: #1F2833">
					Se achas que o vídeos são para ti, procura trabalhos relacionado com C++, é a lingua apropriada!
				</div>
			</div>
		</div>
	</div>

	<!-- Vantagens -->

	<div class="container-fluid pb-0" style="background-color: #F0F1FF;">
		<div class="row">
			<div class="col-lg-6 text-align-center mt-5 mb-5"
				style="background-image: url(images/vantagenspic1.png); height: 540px; width: 580px; display: block; margin-left: auto; margin-right: auto;">
			</div>
			<div class="col-lg-6" style="padding-right: 8vh;">
				<div class="py-3" style="color: #1F2833">
					<h1 class="mb-4 mt-4">Descobre as nossas <span class="">Vantagens</span></h1>
					<h4 class="mb-5">Enumerámos algumas das regalias que podes usufruir ao trabalhar com o LancerJet.
					</h4>
					<div class="ps-4">
						<div class="d-flex mb-5">
							<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white rounded-circle mx-auto mb-4"
								style="width: 40px; height: 40px;">
								<i class="fas fa-music fs-5" style="color: #1F2833;"></i>
							</div>
							<div class="ps-4">
								<p class="mb-0">Podes trabalhar a ouvir música e divertires-te com o que estás a fazer,
									vais ver que ajuda no desenvolvimento do teu trabalho!</p>
							</div>
						</div>
						<div class="d-flex mb-5">
							<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white rounded-circle mx-auto mb-4"
								style="width: 40px; height: 40px;">
								<i class="fas fa-pause fs-5" style="color: #1F2833;"></i>
							</div>
							<div class="ps-4">
								<p class="mb-0">Cria o teu próprio horário, faz pausas quando quiseres e gere o tempo
									como preferires. Organizas assim o teu dia à tua maneira.</p>
							</div>
						</div>
						<div class="d-flex">
							<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white rounded-circle mx-auto mb-4"
								style="width: 40px; height: 40px;">
								<i class="fas fa-home fs-5" style="color: #1F2833;"></i>
							</div>
							<div class="ps-4">
								<p class="mb-0">Trabalha a partir de casa ou de onde te sentires mais confortável, não
									tens que te levantar mais cedo para ir para o escritório.</p>
							</div>
						</div>
						<div class="d-flex mt-5">
							<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white rounded-circle mx-auto mb-4"
								style="width: 40px; height: 40px;">
								<i class="fas fa-compress fs-5" style="color: #1F2833;"></i>
							</div>
							<div class="ps-4">
								<p class="mb-0">Estás sozinho e sem pressas, não tens ninguém que te pressione, que te
									distraia e que disturbe o teu trabalho, leva o teu tempo!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- sobre nós -->

	<div id="sobre-nos" class="container-fluid py-0 pb-5 px-5 mb-0 text-center" style="background-color: #F0F1FF">
		<div class="text-center fs-1 fst-italic mb-3 pt-4" style="color: #1F2833">Sobre Nós</div>
		<div class="row pt-4">
			<div class="text-left">
				<h6>O LancerJet é um site que se designa a freelancers na área da programação.
				</h6>
				<h6>Este website de freelancers, oferece a trabalhores independentes uma maneira de encontrarem
					trabalhos
					na sua área, que estes gostem e tenham gosto em faze-lo, como também, dá a possibilidade de
					empresas
					e também trabalhadores independentes, publicarem trabalhos que gostariam que fossem realizados
					por pessoas que
					sejam experientes na área.
				</h6>
				<h6>Sê bem-vindo!
				</h6>
			</div>
		</div>
	</div>

	<!-- rodape -->

	<?php include_once('includes/rodape.php') ?>	

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<script>
		$(document).ready(function () {
			$('.more-info-btn').click(function () {
				$(this).next('.more-info-text').fadeToggle(1000);
			});
			$('.more-info-btn').click(function () {
				$(this).text(function (_, text) {
					return text === "Saber mais" ? "Esconder" : "Saber mais";
				});
			});
		});
	</script>

</body>

</html>