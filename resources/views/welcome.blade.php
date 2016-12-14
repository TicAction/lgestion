@extends('layouts.app')

@section('content')
    <div class="text-center">
        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal2">
                Je veux me connecter
            </button>

        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">
            Je veux créer un compte
        </button>
    </div>

    <!-- Modal 1-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">S'ENREGISTRER EN TANT QUE ...</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">

                        <tr class="info">
                            <td class="text-default">PARENTS</td>
                            <td class="text-default">ENSEIGNANTS</td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <a class="btn btn-success btn-lg" href="{{url('http://parent.edu-portail.com/register')}}">{{ Html::image('images/parents.png') }} </a>

                            </td>
                            <td class="text-center">
                                <a class="btn btn-success btn-lg"
                                   href="{{url('admin/register')}}">{{ Html::image('images/teachers.png') }} </a>
                            </td>

                        </tr>

                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                </div>
            </div>
        </div>
    </div>


    <!-- Modal 1-->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">SE CONNECTER EN TANT QUE ...</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">

                        <tr class="info">
                            <td class="text-default">PARENTS</td>
                            <td class="text-default">ENSEIGNANTS</td>

                        </tr>
                        <tr>
                            <td class="text-center">
                                <a class="btn btn-success btn-lg" href="{{url('http://parent.edu-portail.com/login')}}">
                                    {{Html::image('images/parents.png') }}
                                </a>

                            </td>
                            <td class="text-center">
                                <a class="btn btn-success btn-lg"
                                   href="{{url('admin/login')}}">
                                    {{ Html::image('images/teachers.png') }}
                                </a>
                            </td>

                        </tr>

                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                </div>
            </div>
        </div>
    </div>
@endsection
