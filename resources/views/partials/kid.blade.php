<div class="col-md-4">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Anniversaire</h3>
        </div>
        <div class="panel-body">
            <table class="table table-condensed">
                <tr>
                    <th>Nom</th>
                    <th>Date anniversaire</th>
                </tr>
                @foreach($kids as $kid)
                    @if($kid->birthday->format('m')== Jenssegers\Date\Date::now()->format('m'))

                        <tr>
                            <td>{{$kid->fullname}}</td>
                            @if($kid->birthday->format('d')== Jenssegers\Date\Date::now()->format('d'))
                                <td style="color:red;">{{$kid->birthday->format('d-m-Y')}}</td>
                            @else
                                <td>{{$kid->birthday->format('d-m-Y')}}</td>
                            @endif
                        </tr>

                    @endif
                @endforeach
            </table>
        </div>
    </div>
</div>