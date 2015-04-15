<!DOCTYPE html>
<html>
<head>
	<title>Karön</title>
	{{HTML::Style('css/style.css') }}
	{{HTML::Script('js/script.js') }}
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
      <li><a href="#">Bokning</a></li>
    <li><a href="#">Restaurang</a></li>
   <li><a href="#">Karta</a></li>
  <li><a href="#">Om Oss</a></li>
    </ul>
  </section>
</nav>
		@yield('content')
  <div class="panel">
  <h5>This is a regular panel.</h5>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
</div>

</body>
</html>