@extends('layouts.main')
@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">SCHEDULE</h3>
        </div>
        <div class="panel-body">
           <p class="text-right">
               {{link_to_route('admin.schedule.create','Créer un évènement',null,['class'=>'btn btn-success'])}}
           </p>
            <table class="table table-responsive">
                <tr class="">
                    <th>DATE</th>
                    <th>ÉVÉNEMENT</th>
                    <th>JOURS SPÉCIALS</th>
                    <th colspan="2">ACTION</th>


                </tr>

                @foreach($schedules as $schedule)
                    <tr>
                        <td>

                            Du
                            {{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$schedule->schedule_start)->format('l d F Y'))}}
                            <br>
                            au
                            {{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$schedule->schedule_end)->format('l d F Y'))}}
                        </td>
                        <td>
                            {{$schedule->event}}

                        </td>
                        <td>
                            {{$schedule->special_day}}

                        </td>
                        <td>
                            {{link_to_route('admin.schedule.edit','Modifier',[$schedule->id],['class'=>'btn btn-success  btn-xs'])}}

                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','url' => ['admin/schedule', $schedule->id],'style' => 'display:inline','onsubmit'=>'return confirm("Voulez-vous vraiment détruire cette observation?")' ]) !!}
                            {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection
