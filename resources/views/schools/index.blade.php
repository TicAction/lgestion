@extends('layouts.main')
@section('content')
    <h3>Section école</h3>
    @foreach($schools as $school)
    {{$school->class_name}}
        <p>Nom de l'école :{{$school->school_name}}</p>
        <p>Nom de l'enseignant :{{$school->admin->name}}</p>
    @endforeach
@endsection
