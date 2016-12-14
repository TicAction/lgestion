<div class="col-md-4">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Devoirs à remettre</h3>
        </div>
        <div class="panel-body">

            Avec formulaire
            <table class="table table-condense">
                <tr>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Action</th>
                </tr>
                @foreach($fhomeworks as $fh)
                    <tr>
                        <td>{{$fh->start->format('d-m-Y')}}</td>
                        <td>{{$fh->end->format('d-m-Y')}}</td>
                        <td><a href="{{url('admin/formulaire',$fh->id)}}">
                                <button class="btn btn-success btn-xs">VOIR</button>
                            </a></td>
                    </tr>
                @endforeach
            </table>

            Sans formulaire
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
                        <td><a href="{{url('admin/formulaire/show',$homework->id)}}">
                                <button class="btn btn-success btn-xs">VOIR</button>
                            </a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>