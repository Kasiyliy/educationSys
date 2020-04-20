@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="page-header row no-gutters py-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-uppercase page-title">Қолданушылар тізімі</h1>
                        <h3 class="page-subtitle m-3 text-right">
                            <a class="btn btn-success text-center" href="{{route('users.create')}}">
                                <i class="fa fa-plus"></i> Жаңа қолданушы қосу
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Қолданушылар</h6>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Аты-жөні</th>
                                    <th scope="col" class="border-0">Пошта</th>
                                    <th scope="col" class="border-0">Рөль</th>
                                    <th scope="col" class="border-0">Іс-әрекет</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->first_name.' '.$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role->name}}</td>
                                        <td>
                                            <a class="btn btn-outline-primary mb-2 "
                                               href="{{route('users.edit', ['id' => $user->id])}}">
                                                Жаңарту <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>

                    </div>
                    <div class="card-footer">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection