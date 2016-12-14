@extends('layouts.main')
@section('content')

{!! Form::open(['class'=>"form-horizontal"]) !!}
<div class="form-group">
    {!! Form::label('class_name',"Nom de la classe",['class'=>'form->control']) !!}
    {!! Form::text('class_name',$school->class_name,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('class_name',"Nom de la classe",['class'=>'form->control']) !!}
{!! Form::text('school_name',$school->school_name,['class'=>'form-control']) !!}
</div>
{!! Form::submit('Soumettre',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection