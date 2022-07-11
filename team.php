<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Equipe</title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Bootstrap App Landing Template">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
		<meta name="author" content="Themefisher">
		<meta name="generator" content="Themefisher Small Apps Template v1.0">
		<link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
		<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="plugins/slick/slick.css">
		<link rel="stylesheet" href="plugins/slick/slick-theme.css">
		<link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
		<link rel="stylesheet" href="plugins/aos/aos.css">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style3.css" rel="stylesheet">
	</head>
	<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
		<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
			<div class="container">
				<a class="navbar-brand" href="index.html">Small Phones</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="ti-menu"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.html">Início</a>
						</li>
						<li class="nav-item active @@team">
							<a class="nav-link" href="team.php">Equipe</a>
						</li>
						<li class="nav-item @@contact">
							<a class="nav-link" href="contact.php">Contatos</a>
						</li>
						<li class="nav-item @@about">
							<a class="nav-link" href="profile.php">Perfil</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<section class="section page-title">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 m-auto">
						<!-- Page Title -->
						<h1>Nossa equipe</h1>
						<!-- Page Description -->
						<p>Abaixo estão listados nossos técnicos, que estão espalhados por diversos estados do páis, para melhor te atender.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="design-team section pt-0">
			<div class="container">
				<div class="row">
					<?php
						include_once "php/carregar-banco-de-dados.php";
						$con = mysqli_connect($_SESSION['BDhost'], $_SESSION['BDuser'], $_SESSION['BDpassword'], $_SESSION['BDname']);

						$query = mysqli_query($con, "SELECT * FROM Tecnico ORDER BY nome ASC");

						while ($tecnico = mysqli_fetch_array($query)) {
							echo "
							<div class='col-lg-4 col-md-6'>
								<div class='team-sm'>
									<div class='image'>
										<img class='w-100' src='images2/{$tecnico['imagem']}' alt='member-image'>
									</div>
									<h3>{$tecnico['nome']}</h3>
									<cite>{$tecnico['formacao']}</cite>
								</div>
							</div>";
						}
					?>
				</div>
			</div>
		</section>
		<section class="section cta-hire bg-gary">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<!-- Hire Title -->
						<h2>Estamos em busca de técnicos talentosos</h2>
						<!-- Job Description -->
						<p>A cada dia a quantidade de clientes aumenta e estamos precisando cada vez mais de técnicos dedicados e com vontade de crescer no mercado de trabalho.</p>
						<!-- Action Button -->
						<a href="sign-up-tecnico.php" class="mt-3 btn btn-main-md">Entre para a equipe</a>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="footer-main">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-12 m-md-auto align-self-center">
							<div class="block">
								<a href="index.html"><img src="images/logo.png" class="logo-image" alt="footer-logo"></a>
								<!-- Social Site Icons -->
								<ul class="social-icon list-inline">
									<li class="list-inline-item">
										<a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="https://twitter.com/"><i class="ti-twitter"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="https://www.instagram.com/"><i class="ti-instagram"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
							<div class="block-2">
								<!-- heading -->
								<h6>Recursos</h6>
								<!-- links -->
								<ul>
									<li><a href="reportar-bugs.html">Reportar Bugs</a></li>
									<li><a href="sign-up.html">Cadastrar</a></li>
									<li><a href="sign-in.php">Entrar</a></li>
									<li><a href="dashboard.php">Administrador</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
							<div class="block-2">
								<!-- heading -->
								<h6>Companhia</h6>
								<!-- links -->
								<ul>
									<li><a href="profile.php">Perfil</a></li>
									<li><a href="contact.php">Contatos</a></li>
									<li><a href="team.php">Equipe</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center bg-dark py-4">
				<small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Designed &amp; Developed by Small Phones</small class="text-secondary">
			</div>
		</footer>
		<!-- To Top -->
		<div class="scroll-top-to">
			<i class="ti-angle-up"></i>
		</div>
		<script src="plugins/jquery/jquery.min.js"></script>
		<script src="plugins/bootstrap/bootstrap.min.js"></script>
		<script src="plugins/slick/slick.min.js"></script>
		<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
		<script src="plugins/syotimer/jquery.syotimer.min.js"></script>
		<script src="plugins/aos/aos.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
		<script src="plugins/google-map/gmap.js"></script>
		<script src="js/script.js"></script>
	</body>

</html>