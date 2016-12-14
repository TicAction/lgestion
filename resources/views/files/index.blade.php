@extends('layouts.main')
@section('content')

    @foreach($files as $file)
       <h3>{{$file->matiere}}</h3>

       <a href="{{url("documents",$file->fullname)}}", target="_blank"> {{$file->titre}}</a>
    {!! Form::open(['method'=>'DELETE','url' => ['admin/document', $file->id],'style' => 'display:inline' ]) !!}
    {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}
    {!! Form::close() !!}
    @endforeach
@endsection