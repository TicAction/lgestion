<table class="table table-condense">
    <tr>
        <th>Début</th>
        <th>Fin</th>
        <th>Action</th>
    </tr>
    @foreach($homeworks as $homework)
        <tr>
            <td>{{$homework->start->format('d-m-Y')}}</td>
            <td>{{$homework->end->format('d-m-Y')}}</td>
            <td><a href="{{url('admin/formulaire/show',$homework->id)}}"><button class="btn btn-success btn-xs">VOIR</button></a></td>
        </tr>
    @endforeach
</table>

