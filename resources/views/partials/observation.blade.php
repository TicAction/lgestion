<div class="col-md-4">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Mes observations</h3>
        </div>
        <div class="panel-body">
            <table class="table table-condensed">
                <tr>
                    <th>Nom</th>
                    <th>Date</th>

                </tr>

                @foreach($obs as $ob)


                        <tr>
                            <td><a href="{{url('admin/observation',$ob->id)}}">{{$ob->kid->fullname}}</a></td>
                            <td>{{$ob->ob_date->format("d-m-Y")}}</td>
                        </tr>


                @endforeach

            </table>
        </div>
    </div>
</div>