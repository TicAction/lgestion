<div class="panel panel-success">
    @if($action == 'update')
        <div class="panel-heading">Modifier {{$kid->firstname}} {{$kid->lastname}}</div>
    @else
        <div class="panel-heading">Sauvegarder un nouvel élèves</div>
    @endif

    <div class="panel-body">

        {!! Form::model($kid,['url'=>action("KidController@$action",$kid),'class'=>'form-horizontal','method'=>$action == 'store'? 'Post':'Put']) !!}
        <div class="form-group">
            {!! Form::label('group','Groupe') !!}
            {!! Form::select('group',$gr,null,['class'=>'form-control','id'=>'groupe']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('firstname','Prénom') !!}
            {!! Form::text('firstname',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lastname','Nom de famille') !!}
            {!! Form::text('lastname',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('birthday','Date de naissance') !!}
            @if($action == 'update')
                {!! Form::text('birthday',$kid->birthday->format('d/m/Y'),['class'=>'form-control']) !!}
            @else
                {!! Form::text('birthday',$kid->birthday,['class'=>'form-control','placeholder'=>'jour/mois/année']) !!}
            @endif
        </div>
        @if($action == 'update')
            <div class="row">
                {!! Form::submit('Modifier',['class'=>'btn btn-md btn-success btn-block']) !!}

            </div>
        @else
            {!! Form::submit('Soumettre les informations',['class'=>'btn btn-md btn-success btn-block']) !!}
        @endif

        {!! Form::close() !!}
        <div class="row">
            <br>
            @if($action == 'update')
                {!! Form::open(['method'=>'DELETE','url' => ['admin/enfant', $kid->id],'style' => 'display:inline' ]) !!}
                {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-md btn-block']) !!}
                {!! Form::close() !!}
            @endif

        </div>
    </div>

</div>




