<nav id="full-navbar" class="navbar navbar-expand-md position-fixed w-100 ">

    <div class="w-100 mx-5">

        <!-- BUTTON FOR MOBILE VIEW -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>


        <!-- FULL NAVBAR -->
        <div id="navbarSupportedContent" class="collapse navbar-collapse d-flex justify-content-between pt-2">
            <a id="logoHeader" class="nav-link navbar-nav py-0" href="{{ route('home') }}"><img class="img-fluid" src="/img/logo-vertical-SisPlax.jpg" alt=""></a>
            <ul class="navbar-nav ml-auto">
                <i class="fa-solid fa-user"></i>
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="{{ url('profile') }}">{{__('Profilo')}}</a>
                        @isAdmin
                            <a class="dropdown-item " href="{{ route('admin.service.index') }}">Dashboard</a>
                        @endisAdmin
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                            {{ __('Disconnettiti') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
  </nav>
