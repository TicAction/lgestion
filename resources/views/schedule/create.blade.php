@extends('layouts.main')
@section('content')

    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">CRÉATION </h3>
        </div>
        <div class="panel-body">
            {!! Form::open(['route'=>'admin.schedule.store','class'=>'form-horizontal']) !!}
              <div class="form-group">
                  {!! Form::label('schedule_start',"Date de l'évènement") !!}
                  {!! Form::text('schedule_start',$schedule->schedule_start,['class'=>'form-control','placeholder'=>'jour/mois/année']) !!}
                  {!! Form::label('schedule_end',"Date de l'évènement") !!}
                  {!! Form::text('schedule_end',$schedule->scheduleend,['class'=>'form-control','placeholder'=>'jour/mois/année']) !!}
              </div>

            <div class="form-group">
                {!! Form::label('event',"Évènement") !!}
                {!! Form::text('event',$schedule->event,['class'=>'form-control']) !!}

            </div>
            <div class="form-group">
                {!! Form::label('special_day',"Jour spécial") !!}
                {!! Form::text('special_day',$schedule->pecial_day,['class'=>'form-control']) !!}

            </div>
                {!! Form::submit('Soumettre',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection
