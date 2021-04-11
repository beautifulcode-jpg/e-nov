<!DOCTYPE HTML>
<html>
	<head>
		<title>Blog e-NOV</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
		<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header" class="navheader">
				<h1><a href="/">e-NOV</a> Emsi</h1>
				<nav id="nav">
					<ul>
						<li><a href="/">Accueil</a></li>
						<li><a href="/blog">Actualités</a></li>
						<li><a href="/projets">Projets</a></li>
						<li><a href="/robotique">Rejoignez-nous</a></li>
						<li><a href="/contact">Contact</a></li>
						@auth
						<li><a href="/logout" class="button">Se déconnecter</a></li>
						@endauth
						@guest
						<li><a href="/login" class="button">Se connecter</a></li>
						@endguest
					</ul>
				</nav>
			</header>

			<!-- Main -->
				<section id="main" class="container">
					@yield('content')
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
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>