<!DOCTYPE html>
<html>
<head>

	<title>Karön</title>
	{{HTML::Style('css/style.css') }}
	{{HTML::Script('js/script.js') }}
<!-- start for script running the background immage -->	
	<script src="js/vendor/jquery-2.1.3.min.js"></script>
	<script src="js/foundation/foundation.js"></script>
<!-- ending off script running the background immage -->
<link rel="stylesheet" href="css/foundation.css">
</head>
<body>
	
	<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Karön</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="#">Boka stuga</a></li>
    <li><a href="#">Restaurang</a></li>
   <li><a href="#">Karta</a></li>
  <li><a href="#">Om Oss</a></li>
    </ul>
  </section>
</nav>
    <div class="row booking">
    @yield('content')
    </div>

<footer>
  <p>Contact information: <a href="karon@hotmail.se">
  karon@hotmail.se</a>.</p>
</footer>

</body>
</html>
