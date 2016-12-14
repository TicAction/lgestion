@extends('layouts.main')
@section('content')
    <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['url'=>'admin/document','files'=>true,'method'=>'post', "class"=>"form-horizontal"]) !!}
        <div class="form-group">

        </div>
        <div class="form-group">
            {!! Form::label('matiere',"Matière") !!}
            {!! Form::text('matiere',null,['class'=>"form-control"]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title',"Titre du document") !!}
            {!! Form::text('title',null,['class'=>"form-control"]) !!}
        </div>
        <div class="form-group">
            {!! Form::file('fullname') !!}
        </div>

        {!! Form::submit("Téléverser") !!}
        {!! Form::close() !!}

    </div>

@endsection