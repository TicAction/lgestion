@extends('layouts.main')
@section("sidebar")
    @include('kid.create')
@endsection
@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">LISTE DES ÉLÈVES</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tr>
                    <th>Prénom</th>
                    <th>Anniversaire</th>
                    <th class="hidden-xs">Âge</th>
                    <th class="hidden-xs">Groupe</th>
                    <th class="text-center hidden-xs">Actions</th>
                </tr>
                @foreach($kids as $kid)
                    @foreach($kid->admins as $admin)
                        @if($admin->id == Auth::guard('admins')->user()->id)
                            <tr>


                                <td>{{$kid->fullname}}</td>
                                <td>{{trans($kid->birthday->format('d/m/Y'))}}   </td>
                                <td >{{$kid->age}} ans</td>
                                <td>
                                    @foreach($groups as $group)
                                        @if($admin->pivot->gr == $group->id)
                                            {{$group->group_number}}
                                        @endif
                                    @endforeach
                                </td>
                                <td class="text-left">
                                    <a href="{{url('admin/comportement/create',$kid->id)}}">{!! Form::submit('Comportement',['class'=>'btn btn-xs btn-danger']) !!}</a>
                                    |
                                    <a href="{{route('admin.enfant.edit',$kid->id)}}">{!! Form::submit('Éditer',['class'=>'btn btn-xs btn-primary']) !!}</a>
                                    |
                                    @if($kid->profil)

                                        <a href="{{route('admin.profil.show',$kid->profil->id)}}">{!! Form::submit('Profil',['class'=>'btn btn-xs btn-info' ]) !!}
                                            |</a>

                                    @endif

                                    @if($kid->profil)

                                        <a href="{{route('admin.profil.edit',$kid->profil->id)}}">{!! Form::submit('Éditer le profil',['class'=>'btn btn-xs btn-info' ]) !!}
                                        </a>


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
