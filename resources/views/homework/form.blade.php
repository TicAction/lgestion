<div class="panel panel-success">
    @if($action == 'update')
        <div class="panel-heading">Modifier</div>
    @else
        <div class="panel-heading">Page des devoirs </div>
    @endif
    <div class="panel-body">

        {!! Form::model($homework,['url'=>action("HomeworkController@$action",$homework),'class'=>'form-horizontal','method'=>$action == 'store'? 'Post':'Put']) !!}

        <table class="table ">
            <tr>
                <td>
                    <div class="panel">

                        @if($action == 'update' and $homework->start)
                            {!! Form::label('start','Date de début') !!}

                            {!! Form::text('start',$homework->start->format('d/m/Y'),['class'=>'form-control']) !!}

                        @else
                            {!! Form::label('start','Date de début') !!}
                            {!! Form::text('start',$homework->start,['class'=>'form-control','placeholder'=>date('d/m/Y')]) !!}

                        @endif

                    </div>
                </td>
                <td>
                    <div class="panel">
                        @if($action == 'update' and $homework->start)
                            {!! Form::label('end','Date de fin') !!}
                            {!! Form::text('end',$homework->end->format('d/m/Y'),['class'=>'form-control']) !!}
                        @else
                            {!! Form::label('end','Date de fin') !!}
                            {!! Form::text('end',$homework->end,['class'=>'form-control','placeholder'=>date('d/m/Y')]) !!}

                        @endif
                    </div>
                </td>

            </tr>

            <tr>
                <td colspan="2">
                    <div class="panel">
                        {!! Form::textarea('content',null,['class'=>'form-inline','id'=>'editor1','style'=>'width:100%']) !!}
                        <script>
                            CKEDITOR.replace( 'editor1',{
                                language: 'fr',

                            });
                        </script>
                    </div>
                </td>
            </tr>

        </table>


    </div>

    <div class="text-right">
        {!! Form::submit('Soumettre les informations',['class'=>'btn btn-md btn-success']) !!}
    </div>
    {!! Form::close() !!}
</div>

</div>
</div>



