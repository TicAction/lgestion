@extends('layouts.main')
@section('sidebar')
    @include('kid.form',['action'=>'update'])
@endsection

@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">LISTE DES ÉLÈVES</h3>
        </div>
        <div class="panel-body">
            <table class="table table-responsive table-striped">
                <tr>
                    <th>Prénom</th>
                    <th>Nom de famille</th>
                    <th>Anniversaire</th>
                    <th>Âge</th>
                    <th>Actions</th>
                </tr>
                @foreach($kids as $kid)
                    @foreach($kid->admins as $admin)

                        @if($admin->id == Auth::guard('admins')->user()->id)
                            <tr>
                                <td>{{$kid->firstname}}</td>
                                <td>{{$kid->lastname}}</td>
                                <td>{{$kid->birthday->format('d-m-Y')}}</td>
                                <td>{{$kid->age}} ans</td>
                                <td>
                                    <a href="{{route('admin.enfant.edit',$kid->id)}}">{!! Form::submit('Éditer',['class'=>'btn btn-xs btn-primary']) !!}</a>
                                    |
                                    @if($kid->profil)
                                        <a href="{{route('admin.profil.show',$kid->profil->id)}}">{!! Form::submit('Voir le profil',['class'=>'btn btn-xs btn-info' ]) !!}
                                            | </a>
                                    @endif

                                    @if($kid->profil)
                                        <a href="{{route('admin.profil.edit',$kid->profil->id)}}">{!! Form::submit('Éditer le profil',['class'=>'btn btn-xs btn-info' ]) !!}
                                            | </a>
                                    @endif
                                    @if(!$kid->profil)
                                        <a href="{{url('admin/profil/create',$kid->id)}}">{!! Form::submit('Créer un profil',['class'=>'btn btn-xs btn-info' ]) !!}</a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>
@endsection
