@extends('layouts.main')
@section('content')
    <div class="row">
        @include("partials.kid")
        @include("partials.observation")
        @include("partials.homework")
    </div>
    <div class="row">
        @include("partials.behavior")


        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">{{strtoupper (\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',Jenssegers\Date\Date::now())->format('l d F Y'))}}</h3>
                </div>
                <div class="panel-body">
                    <p>
                        Inter has ruinarum varietates a Nisibi quam tuebatur accitus Vrsicinus, cui nos obsecuturos
                        iunxerat
                        imperiale praeceptum, dispicere litis exitialis certamina cogebatur abnuens et reclamans,
                        adulatorum
                        oblatrantibus turmis, bellicosus sane milesque semper et militum ductor sed forensibus iurgiis
                        longe
                        discretus, qui metu sui discriminis anxius cum accusatores quaesitoresque subditivos sibi
                        consociatos ex isdem foveis cerneret emergentes, quae clam palamve agitabantur, occultis
                        Constantium
                        litteris edocebat inplorans subsidia, quorum metu tumor notissimus Caesaris exhalaret.
                    </p>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">{{strtoupper (\Jenssegers\Date\Date::createFromFormat('Y-m-d H:i:s',Jenssegers\Date\Date::now())->format('l d F Y'))}}</h3>
                </div>
                <div class="panel-body">
                    <p>
                        Inter has ruinarum varietates a Nisibi quam tuebatur accitus Vrsicinus, cui nos obsecuturos
                        iunxerat
                        imperiale praeceptum, dispicere litis exitialis certamina cogebatur abnuens et reclamans,
                        adulatorum
                        oblatrantibus turmis, bellicosus sane milesque semper et militum ductor sed forensibus iurgiis
                        longe
                        discretus, qui metu sui discriminis anxius cum accusatores quaesitoresque subditivos sibi
                        consociatos ex isdem foveis cerneret emergentes, quae clam palamve agitabantur, occultis
                        Constantium
                        litteris edocebat inplorans subsidia, quorum metu tumor notissimus Caesaris exhalaret.
                    </p>

                </div>
            </div>
        </div>
    </div>


@endsection
