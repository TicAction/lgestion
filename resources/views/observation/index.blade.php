@extends('layouts.main')
@section('content')


        <a href="{{url('admin/observation/create')}}">
            <button class="btn btn-success navbar-left">Créer une observation</button>
        </a>
   <br>
   <br>
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">
                Consignation des observations
            </h3>
        </div>

        <div class="panel-body">

            <table class="table table-responsive">
                <tr class="">
                    <th>Nom de l'enfant</th>
                    <th>Date de l'observation</th>
                    <th class="text-center">ACTION</th>


                </tr>

                @foreach($observations as $observation)
                    @if($observation)
                        <tr>
                            <td>
                                <h4>
                                    <strong>

                                        <a href="{{route('admin.observation.show',$observation->id)}}">
                                            <em>{{$observation->kid->fullname}} </em>
                                        </a>

                                    </strong>
                                </h4>
                            </td>
                            <td>
                                <div>
                                    {{ucfirst(\Jenssegers\Date\Date::parse($observation->ob_date)->format('l d F Y'))}}
                                </div>
                            </td>

                            <td>
                                <div class="text-right">
                                    <a href="{{route('admin.observation.edit',$observation->id)}}">
                                        <button class="btn btn-success">Modifier</button>
                                    </a>

                                    {!! Form::open(['method'=>'DELETE','url' => ['admin/observation', $observation->id],'style' => 'display:inline','onsubmit' => 'return confirm("Voulez-vous vraiment détruire cette observation?")' ]) !!}
                                    {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-md ']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>

                    @endif
                @endforeach
            </table>


        </div>
    </div>


@endsection