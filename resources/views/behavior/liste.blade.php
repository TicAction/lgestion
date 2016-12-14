@extends('layouts.main')
@section('content')
   <div class="well">
    <h3>Liste des comportements de {{$kid->fullname}}
        <small>
            {{count($behavior)}} @if (count($behavior) > 1 )
                avertissements
            @else
                avertissement
            @endif
        </small></h3>
    @foreach($behavior as $behave)
        <p>
            <strong>{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$behave->behave_date)->format('l d F Y'))}}</strong>
        </p>
        <hr>
        @if($behave->publish == 1)
            <h4>Les parents peuvent voir ce comportement</h4>
        @else
            <h4>Les parents ne peuvent pas voir ce comportement</h4>
        @endif

        <p>

            {{$behave->behavior}}

        <p>
            <a href="{{route('admin.comportement.edit',$behave->id)}}">
        </p>
                <button class="btn btn-success btn-xs">Modifier ce comportement</button>
            </a>
        </p>
        <p>

        </p>
        <hr>
    @endforeach
    </div>
@endsection