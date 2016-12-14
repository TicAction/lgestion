<div class="panel panel-success">
    @if($action == 'update')
        <div class="panel-heading">Modifier</div>
    @else
        <div class="panel-heading">Profil d'apprentissage de {{$kids->fullname}} </div>
    @endif
    <div class="panel-body">

        {!! Form::model($profil,['url'=>action("ProfilController@$action",$profil),'class'=>'form-horizontal','method'=>$action == 'store'? 'Post':'Put']) !!}
        @if($action == 'update')
            <div class="panel-heading">Modifier {{$profil->kid->fullname}} </div>
        @else
            <p>
            <div class="form-group">
                {!! Form::hidden('kid_id',$kids->id,['class'=>'form-control']) !!}

            </div>
            </p>

        @endif

        <table class="table">
            <tr>
                <td>
                    <div class="panel">
                        {!! Form::label('orthopedagogie','Orthopédagogie') !!}
                        {!! Form::checkbox('orthopedagogie',1,null,['class'=>'form-inline']) !!}<br>
                        {!! Form::label('reason_ortho','Problématique') !!}
                           {!! Form::text('reason_ortho',null,['class'=>'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="panel">
                        {!! Form::label('psy_ed','Psycho-éducation') !!}
                        {!! Form::checkbox('psy_ed',1,null,['class'=>'form-inline']) !!}<br>
                        {!! Form::label('reason_psy_ed','Problématique') !!}
                        {!! Form::text('reason_psy_ed',null,['class'=>'form-control']) !!}
                    </div>
                </td>

            </tr>

            <tr>
                <td>
                    <div class="panel">
                        {!! Form::label('psy_eval','Psycho-éducation') !!}
                        {!! Form::checkbox('psy_eval',1,null,['class'=>'form-inline']) !!}<br>
                        @if($action == 'update' and $profil->eval_date)
                            {!! Form::label('eval_date','Date de l\'évaluation') !!}
                            {!! Form::text('eval_date',$profil->eval_date->format('d/m/Y'),['class'=>'form-control']) !!}
                        @else
                            {!! Form::label('eval_date','Date de l\'évaluation') !!}
                            {!! Form::text('eval_date',$profil->eval_date,['class'=>'form-control','placeholder'=>date('d-m-Y')]) !!}

                        @endif
                        {!! Form::label('conclusion','Conclusion du rapport') !!}
                        {!! Form::textarea('conclusion',null,['class'=>'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="panel">
                        {!! Form::label('learning_problem','Probleme d\'apprentissage') !!}
                        {!! Form::checkbox('learning_problem',1,null,['class'=>'form-inline']) !!}<br>
                        {!! Form::label('type_problem','Problème(s) observé(s)') !!}
                        {!! Form::text('type_problem',null,['class'=>'form-control']) !!}
                        {!! Form::label('solution_try','Adaptation,modification ou autres mesures') !!}
                        {!! Form::textarea('solution_try',null,['class'=>'form-control','height:75px']) !!}
                    </div>
                </td>
            </tr>


            <tr>
                <td>
                    <div class="panel">
                        {!! Form::label('social_worker','Travailleur(euse) sociale') !!}
                        {!! Form::checkbox('social_worker',1,null,['class'=>'form-inline']) !!}<br>
                        {!! Form::label('reason_sw','Problématique') !!}
                        {!! Form::text('reason_sw',null,['class'=>'form-control']) !!}
                    </div>
                </td>
                <td>
                    <div class="panel">
                        {!! Form::label('pi','Plan d\'intervention') !!}
                        {!! Form::checkbox('pi',1,null,['class'=>'form-inline']) !!}<br>

                    @if($action == 'update' and $profil->last)
                        {!! Form::label('last','Dernier plan d\'intervention') !!}
                        {!! Form::text('last',$profil->last->format('d/m/Y'),['class'=>'form-control']) !!}
                    @else
                        {!! Form::label('last','Dernier plan d\'intervention') !!}
                        {!! Form::text('last',$profil->last,['class'=>'form-control','placeholder'=>date('d-m-Y')]) !!}

                    @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="panel">
                        {!! Form::label('allergie','Allergie') !!}
                        {!! Form::checkbox('allergie',1,null,['class'=>'form-inline']) !!}<br>
                        {!! Form::label('type_allergie','Type d\'allergie') !!}
                        {!! Form::text('type_allergie',null,['class'=>'form-control']) !!}<br>

                    </div>
                    <div class="panel">
                        {!! Form::label('medication','Médication') !!}
                        {!! Form::checkbox('medication',1,null,['class'=>'form-inline']) !!}<br>
                        {!! Form::label('type','Type de médication') !!}
                        {!! Form::text('type',null,['class'=>'form-control']) !!}<br>

                    </div>
                </td>


                <td>
                    <div class="panel">
                        {!! Form::label('french_level','Situation académique en français') !!}
                        {!! Form::select('french_level',[
                        'retard'=>'Retard',
                        'faible'=>'Faible',
                        'moyen'=>'Moyen',
                        'fort'=>'Fort',
                        ],['class'=>'form-control','id'=>'select','default'=>$profil->french_level]) !!}<br>


                    </div>
                    <div class="panel">
                        {!! Form::label('math_level','Situation académique en mathématiques') !!}
                        {!! Form::select('math_level',[
                        'retard'=>'Retard',
                        'faible'=>'Faible',
                        'moyen'=>'Moyen',
                        'fort'=>'Fort',
                        ],['class'=>'form-control','id'=>'select','default'=>$profil->math_level]) !!}<br>


                    </div>
                </td>

            </tr>
            <tr>
                <td colspan="2"> {!! Form::label('other','Autres') !!}
                    {!! Form::textarea('other',null,['class'=>'form-control','id'=>'editor1']) !!}</td>
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



