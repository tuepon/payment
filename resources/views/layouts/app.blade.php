<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Payment</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
	   		@include('inc.navbar')
	   <div class="container">
				@include('inc.messages')
				@yield('content')
		</div>

		<footer id="footer" class="text-center">
			<p>Copyleft &copy; 2019 Tomonori Ueno</p>
		</footer>
	</body>
</html>