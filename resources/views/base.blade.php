<html>
	<head>
		<title>FixedAssets</title>
		<link rel="stylesheet" href="/css/app.css">

	</head>
	<body class="{{ empty($body_class) ? "homepage" : $body_class }}">
		<header>
			@if(empty($page_title))
				@php ($page_title = 'Homepage')
			@endif
			<h1 class="page-title">{{ $page_title }}</h1>
			<menu class="main-menu">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/assets">Assets</a></li>
					<li><a href="/">Categories</a></li>
					<li><a href="/">Reports</a></li>
				</ul>
			</menu>
		</header>
		<div class="content-wrapper">
			@yield('content')
		</div>
		<footer>This is a footer</footer>
		<script type="text/javascript" src="/js/app.js"></script>
	</body>
</html>
