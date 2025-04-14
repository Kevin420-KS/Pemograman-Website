<!DOCTYPE html>

<html lang="{{str_replace('_', ',', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<title>{{ $title ?? 'PemWeb' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="{{ asset ('front/images/favicon.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset ('front/images/favicon.png') }}" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="'https://fonts.googleapis.com">
	<link rel="preconnect" href="'https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="{{ asset ('front/plugins/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/plugins/font-awesome/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/plugins/font-awesome/brands.css') }}">
	<link rel="stylesheet" href="{{ asset ('front/plugins/font-awesome/solid.css') }}">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="{{ asset ('front/css/style.css') }}">
    @livewireStyles
</head>

<body>

<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{ asset ('front/images/logo.png') }}" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav m-auto mb-2 mb-lg-0">
					<li class="nav-item"> <a class="nav-link" href="{{ route('home') }}">Home</a></li>
				</ul>
				<a href="#!" class="btn btn-outline-primary">Contact Us</a>				
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->

{{ $slot }}

<footer class="section-sm bg-tertiary">
	<div class="container">
		<div class="container d-flex justify-content-center">
            <a wire:negative href="{{ route('home') }}"> Copyright 2025</a>
        </div>
	</div>
</footer>

<!-- # JS Plugins -->
<script src="{{ asset ('front/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset ('front/plugins/bootstrap/bootstrap.min.js') }}"></script>

<!-- Main Script -->
<script src="{{ asset ('front/js/script.js') }}"></script>
@livewireScripts

</body>
</html>