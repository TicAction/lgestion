@extends('layouts.main')
@section('content')

    {{-- */$i=substr($profil->kid->firstname,0,1);/* --}}

    <div class="alert alert-success ">
        <h3>Profil @if(in_array($i,$letter)) d' {{$profil->kid->firstname}}@else
                de {{$profil->kid->firstname}} @endif{{$profil->kid->lastname}}</h3>
    </div>

    <p><h4>Services à l'élève</h4></p>
    <hr>
    <div class="row">
        @if($profil->orthopedagogie)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Orthopédagogie</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Raison du suivi:</strong></p>
                        <p>{{$profil->reason_ortho}}</p>
                    </div>
                </div>

            </div>
        @endif

        @if($profil->psy_ed)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Psycho Éducation</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Raison du suivi:</strong></p>
                        <p>{{$profil->reason_psy_ed}}</p>
                    </div>
                </div>
            </div>
        @endif

        @if($profil->psy_eval)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Évaluation psychologique</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Raison du l"évaluation:</strong></p>
                        <p>{{$profil->conclusion}}</p>
                        <p><strong>Dernière évaluation</strong></p>
                        <p>{{$profil->eval_date->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
        @endif
        @if($profil->medication)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Médication</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Type de médicament</strong></p>
                        <p>{{$profil->type}}</p>

                    </div>
                </div>
            </div>
        @endif
    {{--</div>--}}
    {{--<div class="row">--}}
        @if($profil->social_worker)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Travailleur(euse) sociale</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Raison du suivi</strong></p>
                        <p>{{$profil->reason_sw}}</p>

                    </div>
                </div>
            </div>
        @endif
        @if($profil->pi)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Plan d'intervention</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Date du dermier plan</strong></p>
                        <p>{{$profil->last->format('d/m/Y')}}</p>

                    </div>
                </div>
            </div>
        @endif
        @if($profil->allergie)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Allergie</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Type d'allergie</strong></p>
                        <p>{{$profil->type_allergie}}</p>
                    </div>
                </div>
            </div>
        @endif

        @if($profil->problem)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Difficultés d'apprentissage</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Adaptations ou modification</strong></p>
                        <p>{{$profil->type_problem}}</p>
                        <p><strong>Solution en place</strong></p>
                        <p>{{$profil->solution_try}}</p>

                    </div>
                </div>
            </div>
        @endif
    {{--</div>--}}
    {{--<div class="row">--}}
        @if($profil->french_level or $profil->math_level)
            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Situation académique</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Français</strong></p>
                        <p>{{$profil->french_level}}</p>
                        <p><strong>Mathématique</strong></p>
                        <p>{{$profil->math_level}}</p>

                    </div>
                </div>
            </div>
        @endif

            @if($profil->other)
                <div class="col-md-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Autres</h3>
                        </div>
                        <div class="panel-body">
                            <p><strong>Autres</strong></p>
                            <p>{!! $profil->other !!}</p>


                        </div>
                    </div>
                </div>
            @endif
    </div>

@endsection