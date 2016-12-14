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
    {!! Html::style('css/slate.css') !!}
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    {!! Html::style('css/ie10-viewport-bug-workaround.css') !!}
    <!-- Custom styles for this template -->


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    {!! Html::script('css/ie8-responsive-file-warning.js') !!}
    {!! Html::script('css/ie-emulation-modes-warning.js') !!}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

{{--<div class="container-fluid">--}}


        <!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container-fluid">
        <div class="col-md-offset-6 col-md-6 ">

            <h1 class="text-left" style="color:white">Le portail de l'éducation</h1>
        </div>
    </div>


</div>

</div> <!-- /container -->
<div class="container">

    @yield('content')


</div>
@include('layouts.footer')
</body>
</html>



