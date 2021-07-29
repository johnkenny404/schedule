<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href = "{{asset('css/layout.css')}}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Do-list</title>
    </head>
<body>
    <div class="container-fluid full">
        <div class="container">
            <nav class="navbar navbar-expand-lg fulll">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0 ">
                        <li class="nav-item ">
                        <a class="nav-link active color-type fw-bold"  href="/"  >Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link color-type fw-bold" href="{{route('dashboard')}}" >Dashboard</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link color-type fw-bold" href="{{route('schedules')}}" >Schedule</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        @auth
                        <li class="nav-item">
                               <a class="nav-link  color-type fw-bold" href="{{route('dashboard')}}" >{{auth()->user()->name}}</a>
                            </li>
                            <li class="nav-item">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                   <button type="submit"  class="btn btn-primary">
                                       Logout
                                   </button>
                                </form>
                            </li>
                        @endauth

                        @guest
                        <li class="nav-item">
                            <a class="nav-link active color-type"  href="{{route('login')}}" >Login</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link color-type fw-bold" href="{{route('register')}}" >Register</a>
                            </li>
                        @endguest
                           
                           
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    @yield('content')
    
</body>
</html>