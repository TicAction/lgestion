@extends('layouts.main')
@section('content')
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">LISTE DES ÉLÈVES</h3>
        </div>
        <div class="panel-body">
            <table class="table table-responsive table-stripped">
                <tr>
                    <th>Nom de l'enfant</th>
                    <th>Nom du parent inscrit</th>
                    <th>Courriel</th>
                    <th>Date d'inscription</th>
                    <th>Date de modification</th>

                </tr>
                @foreach($kids as $kid)
                    @foreach($kid->users as $user)
                        <tr>
                            <td>{{ucfirst($kid->firstname)}} {{ucfirst($kid->lastname)}}</td>
                            <td>{{ucwords($user->name)}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>




@endsection