<!DOCTYPE html>
<html>
<head>
	<title>Error 404</title>

        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
        {{ HTML::style('css/errors/error.css') }}
        {{ HTML::script('js/bootstrap.min.js') }}
         {{ HTML::style('css/style.css') }}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pyrsa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<div class="container" id="box">
<H1><span  class="glyphicon glyphicon-align-justify"></span>Error 404</H1>

<h2>Hemos tenido un problema de rutas </h2>
<a id="btn" class="btn btn-primary" href="{{URL::route('Home')}}" ><span class="glyphicon glyphicon-heart-empty"></span> Regresar</a>
</div>
</body>
 
</html>