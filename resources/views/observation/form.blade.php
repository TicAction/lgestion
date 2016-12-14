<div class="panel panel-success">
    <div class="panel-heading">
        CRÉATION D'UNE OBSERVATION
    </div>
    <div class="panel-body">

        {!! Form::model($observation,['url'=>action("ObservationController@$action",$observation),'class'=>'form-horizontal','method'=>$action == 'store'? 'Post':'Put']) !!}

           <div class="form-group">
            {!! Form::label('observation_date',"Date de l'observation") !!}
            @if($action == 'update')
                {!! Form::text('observation_date',$observation->ob_date,['class'=>'form-control']) !!}
            @else
                {!! Form::text('observation_date',$observation->ob_date,['class'=>'form-control','placeholder'=>'jour/mois/année']) !!}

            @endif
        </div>

        <div class="form-group">
            {!! Form::label('kid_id','Enfant') !!}

                {!! Form::select('kid_id',$kid,null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('observation','Observation') !!}
            {!! Form::textarea('observation',null,['class'=>'form-control']) !!}
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
                {!! Form::open(['method'=>'DELETE','url' => ['admin/observation', $observation->id],'style' => 'display:inline' ]) !!}
                {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-md btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @endif
    </div>

</div>
</div>



