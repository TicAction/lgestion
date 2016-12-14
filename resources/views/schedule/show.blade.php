@extends('layouts.main')
@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">SCHEDULE</h3>
        </div>
        <div class="panel-body">
            <table class="table table-responsive">
                <tr class="">
                    <th>DATE</th>
                    <th>ÉVÉNEMENT</th>
                    <th>JOURS SPÉCIALS</th>

                </tr>


                    <tr>
                        <td>
                            Commençant le
                            {{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$schedule->schedule_start)->format('l d F Y'))}}
                            au
                            {{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$schedule->schedule_end)->format('l d F Y'))}}
                        </td>
                        <td>
                            {{$schedule->event}}

                        </td>
                        <td>
                            {{$schedule->special_day}}

                        </td>
                    </tr>

            </table>
        </div>
    </div>


@endsection
