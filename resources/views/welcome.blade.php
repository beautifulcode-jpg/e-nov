<!DOCTYPE HTML>
<html>
	<head>
		<title>Club d'innovation EMSI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/index.css" />
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
		<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="/">e-NOV</a> Emsi</h1>
					<nav id="nav">
						<ul>
							<li><a href="/">Accueil</a></li>
							<li><a href="/blog">Actualités</a></li>
							<li><a href="/projets">Projets</a></li>
							<li><a href="/rejoignez-nous">Rejoignez-nous</a></li>
							<li><a href="#cta">Contact</a></li>
							@if(Auth::guard('writer')->check() || Auth::guard('admin')->check() || Auth::check())
							<li><a href="/logout" class="button">Se déconnecter</a></li>
							@else
							<li><a href="/login" class="button">Se connecter</a></li>
							@endif
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>e-NOV EMSI</h2>
					<p>Le club de l'innovation, projets et événements.</p>
					<ul class="actions special">
						@auth
						<li><a href="/rejoignez-nous" class="button">Rejoignez-nous</a></li>
						@endauth
						@guest
						<li><a href="/login" class="button">Inscription</a></li>
						@endguest
						<li><a href="/blog" class="button">Actualités</a></li>
					</ul>
				</section>

				

			<!-- Main -->
				<section id="main" class="container">

					<div class="row">
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<h3>NOS MISSIONS</h3>
								<p>Offrir aux étudiants une plateforme en ligne, où tout le monde est invité à participer, pour laisser une trace de leurs projets. Nous sommes fiers de fournir le meilleur acompagnement et encadrement pour nos membres.</p>
								<ul class="actions special">
									<li><a href="/rejoignez-nous" class="button alt">Rejoignez-nous</a></li>
								</ul>
							</section>

						</div>
						<div class="col-6 col-12-narrower">

							<section class="box special">
								<h3>PERFORMANCE CRÉATIVE</h3>
								<p>Nous sommes une équipe unie de plusieurs inventeurs, médecins, doctorants, ingénieurs, professeurs associés, techniciens hautement qualifiés et étudiants talentueux. Nous travaillons ensemble pour concevoir et innover.</p>
								<ul class="actions special">
									<li><a href="http://www.smartilab.ma/" class="button alt">En savoir plus</a></li>
								</ul>
							</section>

						</div>
					</div>

					<section class="box special">
						<header class="major">
							<h2>Un travail assidu surmonte tous les obstacles						
							</h2>
							<p>Chaque jour à l’EMSI, vous explorerez vos passions en classe et en dehors, vous assisterez à des événements uniques et vous participerez à des activités que vous aimez déjà ou que vous venez de découvrir. Afin d’intégrer nos élèves ingénieurs dans la sphère de l’innovation et les préparer aux compétitions nationales et internationales, l’EMSI abrite plusieurs clubs d’innovation, club robotique, club informatique, club systèmes embarqués, club énergies renouvelables, club bâtiments travaux publics.
								Depuis leur création, les clubs ont permis aux élèves de se distinguer à plusieurs reprises lors de compétitions comme Imagine Cup Maroc, Shell Eco-Marathon, compétition Nationale JLM.</p>
						</header>
						<span class="image featured"><img src="images/banner.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<i class='fas fa-laptop'></i>
								<a href="/blog/informatique"><h3>Informatique</h3></a>
								<p>offrir aux membres du club des formations,<br> qui leur permettent d'utiliser plusieurs outils informatiques</p>
							</section>
							<section>
								<i class='fas fa-code-branch'></i>
								<a href="/blog/robotique"><h3>Robotique</h3></a>
								<p> apprendre des techniques permettant la conception et la réalisation de machines automatiques ou de robots.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<i class='fas fa-code'></i>
								<a href="/blog/internet-des-objets"><h3>Internet des objets </h3></a>
								<p>L'Internet des objets est l'interconnexion entre l'Internet et des objets, des lieux et des environnements physiques.</p>
							</section>
							<section>
								<i class='fas fa-file-code'></i>
								<a href="/blog/intelligence-artificielle"><h3>Intelligence artificielle</h3></a>
								<p> l'ensemble des théories et des techniques mises en œuvre en vue de réaliser des machines capables de simuler l'intelligence humaine </p>
							</section>
						</div>
					</section>

					

				</section>

			<!-- CTA -->
				<section id="cta">

					<h2>Contactez notre équipe</h2>

					<form>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-6 col-12-mobilep">
								<input type="text" name="name" id="name" placeholder="Nom"/>
							</div>
							<div class="col-9 col-12-mobilep">
								<input type="email" name="email" id="email" placeholder="Adresse mail" />
							</div>
							<div class="col-12 col-12-mobilep">
								<textarea name="message" id="message" placeholder="Votre message" rows="6"></textarea>							</div>
							</div>
						<br>
						<div class="row gtr-50 gtr-uniform">
							<div class="col-4 col-12-mobilep">
								<input type="submit" value="Envoyer" class="fit" />
							</div>
						</div>
					</form>

				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://www.facebook.com/INNOV.CLUB.EMSI.RABAT/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.instagram.com/innov.team/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/beautifulcode-jpg/" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
					</ul>
					
				</footer>

		</div>

		<!-- Scripts -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>			<script src="/js/jquery.dropotron.min.js"></script>
		<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>
	</body>
</html>