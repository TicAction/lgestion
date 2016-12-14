@extends('layouts.main')
@section('content')
<div class="panel panel-success well">
    <div class="panel-heading">
        <h3 class="panel-title">
            Leçons de la semaine du
            {{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fHomework->start)->format('l d F Y')}}
            au
            {{\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',$fHomework->end)->format('l d F Y')}}
        </h3>
    </div>
    <div class="panel-body">

        <table class="table table-striped table-reponsive">
            @if($fHomework->lecture)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Lecture :</td>
                    <td>{!! $fHomework->lecture !!}</td>
                </tr>
            @endif
            @if($fHomework->vocabulaire)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Vocabulaire :</td>
                    <td>{!! $fHomework->vocabulaire !!}</td>
                </tr>
            @endif
            @if($fHomework->grammaire)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Grammaire :</td>
                    <td>{!! $fHomework->grammaire !!}</td>
                </tr>
            @endif
            @if($fHomework->conjugaison)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Conjugaison :</td>
                    <td>{!! $fHomework->conjugaison !!}</td>
                </tr>
            @endif
            @if($fHomework->mathematique_concept)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Mathématique :</td>
                    <td>{!! $fHomework->mathematique_concept !!}</td>
                </tr>
            @endif
            @if($fHomework->mathematique_resolution)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Mathématique :</td>
                    <td>{!! $fHomework->mathematique_resolution !!}</td>
                </tr>
            @endif
            @if($fHomework->univers_social)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Univers Social :</td>
                    <td>{!! $fHomework->univers_social !!}</td>
                </tr>
            @endif
            @if($fHomework->arts)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Arts :</td>
                    <td>{!! $fHomework->arts !!}</td>
                </tr>
            @endif
            @if($fHomework->science)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Science technologie :</td>
                    <td>{!! $fHomework->science !!}</td>
                </tr>
            @endif
            @if($fHomework->ecr)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Éthique culture religieuse :</td>
                    <td>{!! $fHomework->ecr !!}</td>
                </tr>
            @endif
            <tr>
                <td class="text-center" colspan="2">
                    <h3>Devoir de la semaine</h3>
                </td>
            </tr>
            @if($fHomework->devoir_mathematique)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Devoir de mathématique :</td>
                    <td>{!! $fHomework->devoir_mathematique !!}</td>
                </tr>
            @endif
            @if($fHomework->devoir_francais)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Devoir de français :</td>
                    <td>{!! $fHomework->devoir_francais !!}</td>
                </tr>
            @endif
            @if($fHomework->devoir_autres)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Autres travaux :</td>
                    <td>{!! $fHomework->devoir_autres !!}</td>
                </tr>
            @endif
            @if($fHomework->anglais)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Devoir d'Anglais :</td>
                    <td>{!! $fHomework->anglais !!}</td>
                </tr>
            @endif
            @if($fHomework->musique)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Devoir de musique :</td>
                    <td>{!! $fHomework->musique !!}</td>
                </tr>
            @endif
            @if($fHomework->edu)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Devoir d'éducation physique :</td>
                    <td>{!! $fHomework->edu !!}</td>
                </tr>
            @endif
            @if($fHomework->signature)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Signature de la semaine :</td>
                    <td>{!! $fHomework->signature !!}</td>
                </tr>
            @endif
            @if($fHomework->remettre)
                <tr class="text-left">
                    <td class="text-uppercase text-danger">Travaux ou feuilles à remettre :</td>
                    <td>{!! $fHomework->remettre !!}</td>
                </tr>
            @endif

        </table>
    </div>
</div>


@endsection