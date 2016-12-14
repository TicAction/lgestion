@extends('layouts.main')
@section('content')


<table class="table table-responsive table-striped">
    <tr class="">
        <th>Date de début</th>
        <th>Date de fin</th>
        <th>Action</th>
    </tr>
    @foreach($fHomeworks as $fHomework)

        <tr>

            <td width="35%">{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fHomework->start)->format('l d F Y'))}} </td>
            <td width="35%">{{ucfirst(\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fHomework->end)->format('l d F Y'))}}  </td>

            <td width="30%">
                <a href="{{route('admin.devoir.show',$fHomework->id)}}"><button class="btn btn-success btn-sm">Voir</button></a>
                <a href="{{route('admin.devoir.edit',$fHomework->id)}}"><button class="btn btn-info btn-sm">Modifier</button></a>

                {!! Form::open(['method'=>'DELETE','url' => ['admin/formulaire', $fHomework->id],'style' => 'display:inline' ]) !!}
                {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </td>


    @endforeach
</table>
@endsection
