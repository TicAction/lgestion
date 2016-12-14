<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page des codes de la classe</title>
    {!! Html::style('css/bootstrap.css') !!}
</head>
<body>

    <div class="container">

        <div class="row">
            @foreach($kids as $kid)
            <div class="col-md-4">

                <div class="panel panel-default">
                    <div class="panel-heading">Code de {{$kid->fullname}}</div>
                    <div class="panel-body">
                        <p>
                            Rendez-vous sur le site
                            <p><strong>http://pleinsoleil.edu-portail.com</strong></p>
                            Cliquez sur "Je veux créer un compte"
                            Entrez vos informations et par la suite
                            ajouter le code de votre enfant dans la section
                            Ajouter un enfant.

                        </p>

                        Le code est : {{$kid->code}}
                    </div>
                </div>



            </div>
            @endforeach
        </div>

    </div>

</body>
</html>