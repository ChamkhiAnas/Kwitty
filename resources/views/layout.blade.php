<!DOCTYPE html">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{ Request::path() == '/' ? 'current_page_item' :  ''  }}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{ Request::path() == 'clients' ? 'current_page_item' :  ''  }}"><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class="{{ Request::path() == 'about' ? 'current_page_item' :  ''  }}"><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class="{{ Request::path() == 'articles' ? 'current_page_item' :  ''  }}"><a href="/articles" accesskey="4" title="">Articles</a></li>
				<li class="{{ Request::path() == 'contact' ? 'current_page_item' :  ''  }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div id="header-featured">
		<div id="banner-wrapper">
			<div id="banner" class="container">
				<h2>Maecenas luctus lectus</h2>
				<p>This is <strong>SimpleWork</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
				<a href="#" class="button">Etiam posuere</a> </div>
		</div>
	</div>
</div>
<body>
    @yield('header')
    </div>
    @yield('content')

    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
</body>
</html>
