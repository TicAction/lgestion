{!! Form::open(['route'=>['admin.group.store']]) !!}

<div class="form-group">
@if(Auth::guest())

    @else
        {!! Form::hidden('admin_id',Auth::guard('admins')->user()->id,['class'=>'form-control']) !!}

@endif
</div>
<div class="form-group">
    {!! Form::label('group_number','Numéro du groupe')!!}
    {!! Form::text('group_number',null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('group_grade','Niveau du groupe')!!}
    {!! Form::select('group_grade',[
                        'maternelle'=>'Maternelle',
                        '1ere année'=>'1ere année',
                        '2e année'=>'2e année',
                        '3e année'=>'3e année',
                        '4e année'=>'4e année',
                        '5e année'=>'5e année',
                        '6e année'=>'6e année',
                        ],['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Enregistrer le groupe',['class'=>'form-control btn btn-success']) !!}
</div>

{!! Form::close() !!}


