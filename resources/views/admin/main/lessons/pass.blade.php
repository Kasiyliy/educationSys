@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="page-header row no-gutters py-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-uppercase page-title">Сабақ</h1>
                        <h3 class="page-subtitle m-3 text-right">
                            <a class="btn btn-success text-center" href="{{route('my.courses')}}">
                                <i class="fa fa-arrow-left"></i> Артқа қарай бару
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mb-4 col-12">
                <div class="card card-small">
                    <div class="card-header border-bottom">
                        <h1>
                            {{$currentLesson->name}}
                        </h1>
                    </div>
                    <div class="card-body">
                        {!!$currentLesson->description !!}
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-12">
                <p>Сабақтар тізімі</p>
                <ul class="list-group">
                    @foreach($lessons as $index => $lesson)
                        <li class="list-group-item
                         @if($lesson->id == $currentLesson->id)
                                active
                        @endif
                                ">
                            <a class="btn @if($lesson->id == $currentLesson->id) text-white @else text-dark @endif"
                               href="{{route('pass.lesson', ['courseId' => $lesson->course_id, 'lessonId' => $lesson->id])}}">
                                {{($index + 1).') '.$lesson->name}}
                            </a>
                        </li>
                    @endforeach
                    <li class="list-group-item bg-success">
                        <a href="{{route('quiz.course.pass', ['course_id'=> $currentLesson->course_id])}}"
                           class="btn text-white">Тест тапсыру</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection