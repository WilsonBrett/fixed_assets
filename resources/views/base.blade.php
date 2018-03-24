<html>
	<head>
		<title>FixedAssets</title>
	</head>
	<body>
		@if(empty($page_title))
			@php ($page_title = 'Homepage')
		@endif
		<h1>{{ $page_title }}</h1>
		<header>
			<menu>
				<a href="/">Home</a>
				<a href="/assets">Assets</a>
				<a href="/assets/create">Add New Asset</a>
			</menu>
		</header>
		@yield('content')
	</body>
</html>
