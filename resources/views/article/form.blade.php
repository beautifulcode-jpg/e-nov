@extends('layouts.app')

<!DOCTYPE HTML>
<html>
	<head>
		<title>Blog e-NOV</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
		<link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
        <script src="https://cdn.tiny.cloud/1/rocibeki1p858etf0lsmchol2cetgacsv10hx9s737bg0u9j/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                @isset($edit)
                <form method="POST" action='{{ url("/blog/article/$article->id/edit") }}'>
                @else
                <form method="POST" action='/blog/article/ajouter-article'>
                @endisset
                @csrf
                    <div class="row gtr-50 gtr-uniform">
                        <input type="hidden" name="author_id" value="{{Auth::guard('writer')->user()->id}}">
                        <div class="col-7 col-12-mobilep">
                            Titre :
                            <input type="text" name="title" value="{{$article->title ?? ''}}" required/>
                        </div>
                        <div class="col-7 col-12-mobilep">
                            Catégorie :
                            <select id="category" name="category" class="form-control" required>
                            <option value="informatique" @if($article->category =='informatique'){{'selected'}}@endif> Informatique</option>
                            <option value="robotique" @if($article->category =='robotique'){{'selected'}}@endif>Robotique</option>
                            <option value="internet-des-objets" @if($article->category =='internet-des-objets'){{'selected'}}@endif>Internet des objets</option>
                            <option value="intelligence-artificielle" @if($article->category =='intelligence-artificielle'){{'selected'}}@endif>Intelligence Artificielle</option>
                            </select>
                        </div>
                        <div class="col-7 col-12-mobilep">
                            Lien vers l'image :
                            <input type="text" name="pathtoimage" value="{{$article->pathtoimage ?? ''}}" required/>
                        </div>
                        <div class="col-12 col-12-mobilep">
                            Contenu :   
                            	<input id="tinymce" type="text" name="body" value="{{$article->body ?? ''}}"/>
                            </div>
                        </div>
                    <br>
                    
                    <div class="row gtr-50 gtr-uniform">
                        
                        <div class="col-4 col-12-mobilep">
                            <input type="submit" value="Valider" class="fit" />
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
            <script>
                tinymce.init({
					selector: '#tinymce',
					plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
					toolbar: 'addcomment showcomments casechange checklist code formatpainter media permanentpen table',
					toolbar_mode: 'floating',
					tinycomments_mode: 'embedded',
					tinycomments_author: "{{Auth::guard('writer')->user()->name}}",
                });
            </script>

	</body>
</html>
