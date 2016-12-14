@extends('layouts.main')
@section('content')

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">
            DOSSIER D'OBSERVATION DE : {{strtoupper($observation->kid->fullname)}}
        </h3>
    </div>
    <div class="panel-body panel-collapse">
        @foreach($kids as $kid)
       <p>

        {{-- @TODO faire une modification pour afficher la bonne date--}}
           <h4><strong>Date de l'observation :</strong>{{ucfirst(\Jenssegers\Date\Date::parse($kid->ob_date)->format('l d F Y'))}}</h4>
       </p>
            <p>{!! $kid->observation !!}</p>
            <hr>
        @endforeach
    </div>
</div>

@endsection