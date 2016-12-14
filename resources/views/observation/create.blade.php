@extends('layouts.main')
@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            Modifier
        </div>
        <div class="panel-body">

            {!! Form::open(['route'=>'admin.observation.store','class'=>'form-horizontal']) !!}

            <div class="form-group">
                {!! Form::label('ob_date',"Date de l'observation") !!}
                {!! Form::text('ob_date',\Jenssegers\Date\Date::now()->format('d/m/Y'),['class'=>'form-control','placeholder'=>'jour/mois/année']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('kid_id','Enfant') !!}
                {!! Form::select('kid_id',$kid,null,['class'=>'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('observation','Observation') !!}
                {!! Form::textarea('observation',null,['class'=>'form-control ckeditor']) !!}
            </div>

            <div class="row">
                {!! Form::submit('Soumettre',['class'=>'btn btn-md btn-success btn-block']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>
    </div>





@endsection