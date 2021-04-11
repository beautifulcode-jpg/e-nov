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
						@if(Auth::guard('writer')->check() || Auth::guard('admin')->check() || Auth::check())
						<li><a href="/logout" class="button">Se déconnecter</a></li>
						@else
						<li><a href="/login" class="button">Se connecter</a></li>
						@endif
					</ul>
				</nav>
			</header>

			<!-- Main -->
				<section id="main" class="container">
					<div class="box">
						<span class="image featured"><img src="{{$article->pathtoimage}}" alt="{{$article->slug}}" /></span>
						<h3>{{$article->title}}</h3>
						<em>Ecrit par : {{$article->author->name}}, le {{$article->created_at->format('d-m-Y')}}</em>
						@if(Auth::guard('writer')->check())
							<a href="/blog/article/{{$article->id}}/edit">Modifier</a>
						@endif
						@if(Auth::guard('admin')->check())
							<a href="/blog/article/{{$article->id}}/delete">Supprimer</a>
						@endif
						<div class="row">
							<div class="row-6 row-12-mobilep">
								<h3>{{$article->category}}</h3>
								<p>{!!$article->body!!}</p>
							</div>
							<div class="row">
								<div class="col-12 col-12-mobilep">
									<ul class="alt">
										@foreach ($article->comments as $c)
										<li>{{$c->name}} : {{$c->body}}</li>
										@endforeach
									</ul>
									
								</div>
							</div>
						</div>
						@auth
						<form method="POST" action="/blog/article/{{$article->id}}/comment">
                            @csrf
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12 col-12-mobilep">
									<input type="hidden" name="profile_id" id="profile_id" value="{{Auth::id()}}"/>
									<input type="hidden" name="name" id="name" value="{{Auth::user()->name}}"/>
									<input type="hidden" name="article_id" id="article_id" value="{{$article->id}}"/>
									<textarea name="body" id="message" placeholder="Ajouter un commentaire" rows="3"></textarea>							</div>
								</div>
							<br>
							<div class="row gtr-50 gtr-uniform">
								<div class="col-4 col-12-mobilep">
									<input type="submit" value="Publier" class="fit" />
								</div>
							</div>
						</form>
						@endauth
					</div>
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
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>