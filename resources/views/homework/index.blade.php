@extends('layouts.main')
@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">DEVOIRS ET LEÇONS</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-responsive table-striped">
                    <caption><h3>Fiches de devoirs créer sans formulaire</h3></caption>
                    <tr class="">
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Contenu</th>
                        <th>Action</th>
                    </tr>
                    @foreach($devoirs as $devoir)

                        <tr>

                            <td width="20%">{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$devoir->start)->format('l d F Y'))}} </td>
                            <td width="20%">{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$devoir->end)->format('l d F Y'))}}  </td>
                            <td width="25%">{!!str_limit($devoir->content,35) !!}</td>

                            <td width="25%">
                                <a href="{{route('admin.devoir.show',$devoir->id)}}">
                                    <button class="btn btn-success btn-sm">Voir</button>
                                </a>
                                <a href="{{route('admin.devoir.edit',$devoir->id)}}">
                                    <button class="btn btn-info btn-sm">Modifier</button>
                                </a>

                                {!! Form::open(['method'=>'DELETE','url' => ['admin/devoir', $devoir->id],'style' => 'display:inline' ]) !!}
                                {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>
                    @endforeach
                </table>


                <table class="table table-responsive table-striped">

                    <caption><h3>Fiches de devoirs créer avec formulaire</h3></caption>
                    @foreach($fdevoirs as $fdevoir)
                        <tr>
                            <td width="20%">{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fdevoir->start)->format('l d F Y'))}} </td>
                            <td width="20%">{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fdevoir->end)->format('l d F Y'))}}  </td>
                            <td width="25%">{!!str_limit($fdevoir->content,35) !!}</td>

                            <td width="25%">
                                <a href="{{route('admin.formulaire.show',$fdevoir->id)}}">
                                    <button class="btn btn-success btn-sm">Voir</button>
                                </a>
                                <a href="{{route('admin.formulaire.edit',$fdevoir->id)}}">
                                    <button class="btn btn-info btn-sm">Modifier</button>
                                </a>

                                {!! Form::open(['method'=>'DELETE','url' => ['admin/formulaire', $fdevoir->id],'style' => 'display:inline' ]) !!}
                                {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>

@endsection
