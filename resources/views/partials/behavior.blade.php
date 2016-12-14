<div class="col-md-4">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Dernier comportement</h3>
        </div>
        <div class="panel-body">

            <table class="table table-condensed">
                <tr>
                    <th>Date</th>
                    <th>Nom</th>
                    <th>Publier</th>
                </tr>
                @foreach($behaviors as $behavior)
                    <tr>

                        <td>{{$behavior->behave_date->format("d-m-Y")}}</td>
                        <td>
                            <a href="{{url('admin/comportement/liste',$behavior->kids->id)}}">{{$behavior->kids->fullname}}</a>
                        </td>
                        @if($behavior->publish == 1)
                            <td>Oui</td>
                        @else
                            <td>Non</td>
                        @endif
                    </tr>
                @endforeach

            </table>

        </div>
    </div>
</div>