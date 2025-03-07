<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('main')}}">Главная</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('category.index')}}">Обзоры</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Регистрация</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Вход</a>
                      </li>
                      
                      
                      
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Кабинет пользователя</a>
                      </li>
                      <li class="nav-item dropdown">
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Выход') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                     

                    </ul>
                  </div>
                </div>
              </nav>
    </div>
    </div>
    <div>
       @yield('content')
    </div>
</body>
</html>