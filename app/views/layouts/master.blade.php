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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
</head>
<body>
	
	<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="/">Karön</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    

    <!-- Left Nav Section -->
	<ul class="left">
    	<li><a href="/restaurant">Restaurant</a></li>
 		<li><a href="/map">Map</a></li>
		<li><a href="/prices">prices</a></li>    
    	<li><a href="/about">About</a></li>
    </ul>
  </section>
</nav>
		@yield('content')

<footer>
	<p><i class="fi-mail small"></i>Contact information: <a href="klas@konsultsmedjan.se">
	klas@konsultsmedjan.se</a>.</p>
	<p><i class="fi-home medium"></i>Villa Vassen, 372 73 Ronneby</p>
	<p><i class="fi-telephone"></i>0457-142 00</p>
</footer>

</body>
</html>
