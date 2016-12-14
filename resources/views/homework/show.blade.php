@extends('layouts.main')
@section('content')

    <table class="table text-center well">
        <tr>
            <th class="text-center">
                <h3>
                    Devoir de la semaine du
                    {{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$homework->start)->format('l d F Y')}}
                    au
                    {{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$homework->end)->format('l d F Y')}}
                </h3>
            </th>
        </tr>
        <tr class="text-left">
            <td>{!! $homework->content !!}</td>
        </tr>
    </table>





@endsection