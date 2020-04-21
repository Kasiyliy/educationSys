@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="page-header row no-gutters py-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-uppercase page-title">Тесттер тізімі</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Тесттер</h6>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Аты</th>
                                    <th scope="col" class="border-0">Курс</th>
                                    <th scope="col" class="border-0">Іс-әрекет</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($quizzes as $quiz)
                                    @if($quiz->course)
                                        <tr>
                                            <td>{{$quiz->id}}</td>
                                            <td>{{$quiz->name}}</td>
                                            <td>{{$quiz->course->name}}</td>
                                            <td>
                                                <a class="btn btn-outline-primary mb-2 "
                                                   href="{{route('quizzes.pass', ['id' => $quiz->id])}}">
                                                    Тапсыру <i class="fa fa-book"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $quizzes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
