<html>
	<head>
		<title>FixedAssets</title>
		<link rel="stylesheet" href="/css/app.css">
		<script type="text/javascript" src="/js/app.js"></script>
	</head>
	<body class="{{ empty($body_class) ? "homepage" : $body_class }}">
		<div class="content-wrapper">
			<header>
				@if(empty($page_title))
					@php ($page_title = 'Homepage')
				@endif
				<h1 class="page-title">{{ $page_title }}</h1>
				<menu class="main-menu">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/assets">Assets</a></li>
						<li><a href="/assets/create">Add Asset</a></li>
					</ul>
				</menu>
			</header>
			@yield('content')
		</div>
	</body>
</html>
