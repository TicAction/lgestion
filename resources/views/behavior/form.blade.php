<div class="panel panel-success">
    @if($action == 'update')
        <div class="panel-heading">Modifier {{$comportement->kids->fullname}}</div>
    @else
        <div class="panel-heading">Sauvegarder un nouveau comportement de {{$kids->fullname}}</div>
    @endif
    <div class="panel-body">

        {!! Form::model($comportement,['url'=>action("BehaviorController@$action",$comportement),'class'=>'form-horizontal','method'=>$action == 'store'? 'Post':'Put']) !!}
        @if($action == 'store')
            {!! Form::hidden('kid_id',$kids->id) !!}
        @endif
        <div class="form-group">
            {!! Form::label('publish',"Si vous désirez envoyer l'information aux parents cochez la case .") !!}
            {!! Form::hidden('publish',0) !!}
            @if($comportement->publish == 1)
            {!! Form::checkbox('publish',1,true,['class','form-control']) !!}
                @else
                {!! Form::checkbox('publish',1,false,['class','form-control']) !!}
                @endif
            </div>
            <div class="form-group">
        {!! Form::label('behave_date','Date du comportement observable') !!}
            @if($action == 'update')
                {!! Form::text('behave_date',$comportement->behave_date->format('d/m/Y'),['class'=>'form-control']) !!}
            @else
                {!! Form::text('behave_date',$comportement->behave_date,['class'=>'form-control','placeholder'=>'jour/mois/année']) !!}

                @endif
        </div>
        <div class="form-group">
            {!! Form::label('behavior','Comportement') !!}
            {!! Form::textarea('behavior',null,['class'=>'form-control']) !!}
        </div>
        @if($action == 'update')
            <div class="row">
                {!! Form::submit('Modifier',['class'=>'btn btn-md btn-success btn-block']) !!}
            </div>
        @else
            {!! Form::submit('Soumettre les informations',['class'=>'btn btn-md btn-success btn-block']) !!}
        @endif
        {!! Form::close() !!}
        <div class="row">
            <br>
            @if($action == 'update')
                {!! Form::open(['method'=>'DELETE','url' => ['admin/comportement', $comportement->id],'style' => 'display:inline' ]) !!}
                {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-md btn-block']) !!}
                {!! Form::close() !!}
        </div>
        @endif
    </div>

</div>
</div>



