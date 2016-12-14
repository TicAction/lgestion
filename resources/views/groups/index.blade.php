@extends('layouts.main')
@section('sidebar')
    @include('groups.create')
    @endsection
@section('content')


@foreach(Auth::guard('admins')->user()->schools as $school)
    <h3>{{$school->school_name}} <small>{{$school->class_name}}</small> </h3>
@endforeach
<hr>
@foreach($groups as $group)
    <ul class="list-unstyled">
        <li><h5>Numéro de groupe : {{$group->group_number}} (<small>{{$group->group_grade}} année</small>)</h5></li>

    </ul>
@endforeach
@endsection