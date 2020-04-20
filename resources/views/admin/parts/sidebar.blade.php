<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <span class="fa fa-user-circle text-white"></span>
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('home')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Басты
                        </p>
                    </a>
                </li>
                <li class="nav-header">Меню</li>
                @if(Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('users.index')}}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                Қолданушылар
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('courses.index')}}">
                            <i class="nav-icon fa fa-book"></i>
                            <p>Курстар</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('quizzes.index')}}">
                            <i class="nav-icon fa fa-pen"></i>
                            <p>Тесттер</p>
                        </a>
                    </li>
                @elseif(Auth::user()->isUser())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('my.courses')}}">
                            <i class="nav-icon fa fa-book-open"></i>
                            <p>Менің курстарым</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('my.certificates')}}">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Менің сертификаттарым</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>Шығу</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>