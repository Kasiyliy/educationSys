@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="page-header row no-gutters py-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-uppercase page-title">Менің сертификаттарым</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @foreach($certificates as $certificate)

                    <div class="card bg-white">
                        <div class="card-header text-muted border-bottom-0">
                            Курс аты: {{$certificate->courseName}}
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="lead"><b>Тест аты: {{$certificate->quizName}}</b></h2>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-sign"></i></span>Нәтиже:
                                            {{$certificate->result}}
                                        </li>
                                        <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-calendar"></i></span>
                                            Тапсырды #: {{$certificate->passedAt}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a class="btn btn-primary"
                                   target="_blank"
                                   href="{{route('get.certificate', ['id' => $certificate->id])}}">
                                    басып шығару
                                    <span class="fa fa-print"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection