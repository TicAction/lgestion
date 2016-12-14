<div class="panel panel-success">
    @if($action == 'update')
        <div class="panel-heading">Modifier</div>
    @else
        <div class="panel-heading">Page des devoirs</div>
    @endif
    <div class="panel-body">

        {!! Form::model($fHomework,['url'=>action("FormHomeworkController@$action",$fHomework),'class'=>'form-horizontal','method'=>$action == 'store'? 'Post':'Put']) !!}

        <table class="table ">
            <tr>
                <td>
                    <div class="panel">
                        @if($action == 'update' and $fHomework->start)
                            {!! Form::label('start','Date de début') !!}
                            {!! Form::text('start',$fHomework->start->format('d/m/Y'),['class'=>'form-control datepicker','id'=>'datepicker']) !!}
                        @else
                            {!! Form::label('start','Date de début') !!}
                            {!! Form::text('start',$fHomework->start,['class'=>'form-control','placeholder'=>date('d/m/Y')]) !!}
                        @endif
                    </div>
                </td>
                <td>
                    <div class="panel">
                        @if($action == 'update' and $fHomework->start)
                            {!! Form::label('end','Date de fin') !!}
                            {!! Form::text('end',$fHomework->end->format('d/m/Y'),['class'=>'form-control']) !!}
                        @else
                            {!! Form::label('end','Date de fin') !!}
                            {!! Form::text('end',$fHomework->end,['class'=>'form-control','placeholder'=>date('d/m/Y')]) !!}

                        @endif
                    </div>
                </td>

            </tr>

            <tr>
                <td>
                    <div class="panel">

                    {!! Form::label('lecture','Lecture',['class'=>'form-inline']) !!}
                    {!! Form::text('lecture',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('vocabulaire','Vocabulaire',['class'=>'form-inline']) !!}
                    {!! Form::text('vocabulaire',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('grammaire','Grammaire',['class'=>'form-inline']) !!}
                    {!! Form::text('grammaire',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('conjugaison','Conjugaison',['class'=>'form-inline']) !!}
                    {!! Form::text('conjugaison',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('mathematique_concept','Mathématique concept',['class'=>'form-inline']) !!}
                    {!! Form::text('mathematique_concept',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('mathematique_resolution','Mathématique résolution',['class'=>'form-inline']) !!}
                    {!! Form::text('mathematique_resolution',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('univers_social','Univers social',['class'=>'form-inline']) !!}
                    {!! Form::text('univers_social',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('arts','Arts',['class'=>'form-inline']) !!}
                    {!! Form::text('arts',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('science','Science',['class'=>'form-inline']) !!}
                    {!! Form::text('science',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('ecr','Éthique et culture religieuse',['class'=>'form-inline']) !!}
                    {!! Form::text('ecr',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('devoir_mathematique','Devoir de mathématique',['class'=>'form-inline']) !!}
                    {!! Form::text('devoir_mathematique',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('devoir_francais','Devoir de français',['class'=>'form-inline']) !!}
                    {!! Form::text('devoir_francais',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('devoir_autres','Autres devoir',['class'=>'form-inline']) !!}
                    {!! Form::text('devoir_autres',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('anglais','Anglais',['class'=>'form-inline']) !!}
                    {!! Form::text('anglais',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('musique','Musique',['class'=>'form-inline']) !!}
                    {!! Form::text('musique',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('edu','Éducation physique',['class'=>'form-inline']) !!}
                    {!! Form::text('edu',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('signature','Signature',['class'=>'form-inline']) !!}
                    {!! Form::text('signature',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!! Form::label('remettre','À remettre',['class'=>'form-inline']) !!}
                    {!! Form::text('remettre',null,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    {!! Form::hidden('admin_id',Auth::guard('admins')->user()->id) !!}
                </td>
            </tr>

        </table>
    </div>

</div>

<div class="text-right">
    {!! Form::submit('Soumettre les informations',['class'=>'btn btn-md btn-success']) !!}
</div>
{!! Form::close() !!}
</div>

</div>
</div>



