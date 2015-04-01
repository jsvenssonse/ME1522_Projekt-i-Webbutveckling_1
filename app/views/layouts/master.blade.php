<!DOCTYPE html>
<html>
<head>
	<title>Blogg</title>
	{{HTML::Style('css/style.css') }}
	{{HTML::Script('js/script.js') }}
</head>
<body>
	<div class="wrapper">
		@yield('content')
	</div>
</body>
</html>