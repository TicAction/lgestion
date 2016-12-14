<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    {!! Html::favicon('favicon.ico') !!}

    <title>Le portail de l'éducation</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('css/bootstrap.css') !!}



            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    {!! Html::style('css/ie10-viewport-bug-workaround.css') !!}
            <!-- Custom styles for this template -->
    {!! Html::style('css/slate.css') !!}
    {!! Html::style('css/login.css') !!}

    {!! Html::script('ie8-responsive-file-warning.js') !!}
    {!! Html::script('ie-emulation-modes-warning.js') !!}
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @yield('content')
        </div>
    </div>
</div>

</body>
</html>