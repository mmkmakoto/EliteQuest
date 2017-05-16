<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
  		<!--#BOOTSTRAP# The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    	<!-- dependências css de todas as páginas -->
    	<link href='/bower_components/bootstrap/dist/css/bootstrap.min.css' rel="stylesheet">
        <link href='/css/helpers.css' rel="stylesheet">

    	<!-- dependências css específicas de cada página -->
    	@yield('css')

        <title>@yield('title')</title>
    </head>
    <body>

    	<!-- body de cada pagina -->
    	@include('partials.navBar')

    	<!-- body especifico de cada pagina -->
    	@yield('body')

    	<!-- dependências js de todas as páginas -->
    	<script src='/bower_components/jquery/dist/jquery.js'></script>
		<script src='/bower_components/bootstrap/dist/js/bootstrap.js'></script>
    	<script src='/bower_components/angular/angular.js'></script>

    	<!-- dependências js específicas de cada página -->
    	@yield('js')

    </body>
</html>