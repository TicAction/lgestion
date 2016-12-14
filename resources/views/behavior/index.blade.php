@extends('layouts.main')


@section('content')


    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">LISTE DES ÉLÈVES</h3>
        </div>
        <div class="panel-body">
            <table class="table table-responsive">
                <tr class="">
                    <th>Prénom de l'élève</th>
                    <th>Nombre de comportement enregistrer</th>
                    <th class="text-center">Actions</th>
                </tr>

                @foreach($behaviors as $behavior)
                    <tr>
                        <td>
                            {{$behavior->kids->firstname}} {{$behavior->kids->lastname}}
                        </td>
                        <td>

                            @foreach($behas as $beha)
                                @if($behavior->kid_id == $beha->kid_id)
                                    {{count($beha)}}
                                @endif
                            @endforeach

                        </td>
                        <td class="text-center">
                            <a href="{{url('admin/comportement/liste',$behavior->kids->id)}}">
                                <button class="btn btn-danger btn-xs">Liste des comportments</button>
                            </a>

                        </td>
                    </tr>

                @endforeach

            </table>
        </div>
    </div>


@endsection
