@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="page-header row no-gutters py-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-uppercase page-title">Менің курстарым</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($courses as $course)
                    <div class="card mb-4 mt-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <img src="{{asset($course->image_path)}}" class="img-fluid" alt="">
                            </div>
                            <div class="col">
                                <div class="card-block p-4">
                                    <p class="card-title">
                                    <h3>
                                        {{$course->name}}
                                    </h3>
                                    </p>
                                    <p class="card-text">{{$course->description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer w-100 text-muted">
                            <div class="row">
                                <div class="col-2">
                                    {{$course->created_at}}
                                </div>
                                <div class="col-6">
                                    Сабақ саны: {{$course->lessons->count()}}
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{route('pass.lesson', ['courseId' => $course->id, 'lessonId' => null])}}"
                                       class="btn btn-lg btn-primary">Оқу</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $courses->links() }}
            </div>
        </div>
    </div>
    </div>
@endsection