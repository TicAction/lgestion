@extends('layouts.main')
@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
           Modifier
        </div>
        <div class="panel-body">

            {!! Form::model($observation,['route'=>['admin.observation.update',$observation->id],'class'=>'form-horizontal','method'=>'Put']) !!}

            <div class="form-group">
                {!! Form::label('ob_date',"Date de l'observation") !!}
                    {!! Form::text('ob_date',ucfirst(\Jenssegers\Date\Date::parse($observation->ob_date)->format('d/m/Y')),['class'=>'form-control','placeholder'=>'jour/mois/année']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('kid_id','Enfant') !!}
                {!! Form::select('kid_id',$kid,null,['class'=>'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('observation','Observation') !!}
                {!! Form::textarea('observation',null,['class'=>'form-control ckeditor','name'=>'ckeditor']) !!}
            </div>

                <div class="row">
                    {!! Form::submit('Modifier',['class'=>'btn btn-md btn-success btn-block']) !!}
                </div>

            {!! Form::close() !!}
            <div class="row">
                <br>

                    {!! Form::open(['method'=>'DELETE','url' => ['admin/observation', $observation->id],'style' => 'display:inline' ]) !!}
                    {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-md btn-block']) !!}
                    {!! Form::close() !!}
            </div>

        </div>

    </div>
    </div>





@endsection