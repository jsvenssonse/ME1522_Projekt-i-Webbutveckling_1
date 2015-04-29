<!DOCTYPE html>
<html>
<head>
	<title>Karön Adminstationsverktyg</title>
	{{HTML::Style('css/foundation.css') }}
	{{HTML::Style('css/admin.css') }}
	{{HTML::Script('js/vendor/jquery-2.1.3.min.js') }}
</head>
<body>
	<nav class="top-bar" data-topbar role="navigation">
		<ul class="title-area">
			<li class="name">
				<h1><a href="#">Karön Admininstarionsverktyg</a></h1>
			</li>
			<li class="toggle-topbar menu-icon">
				<a href="#"><span>Menu</span></a>
			</li>
		</ul>
		<section class="top-bar-section">
			<ul class="left">
				<li class="active"><a href="#">Bokningar</a></li>
				<li class="has-dropdown">
					<a href="#">Ändra sidinnehåll</a>
					<ul class="dropdown">
						<li><a href="#">Startsidan</a></li>
						<li><a href="#">Prisinformation</a></li>
						<li><a href="#">Resturang</a></li>
						<li><a href="#">Om oss</a></li>
						<li><a href="#">Kartan</a></li>
					</ul>
				</li>
			</ul>
		</section>
	</nav>
 	@yield('content')
</body>
</html>