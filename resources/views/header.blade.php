  <nav class="navbar sticky-top navbar-expand-sm navbar-dark gradient-custom">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/logo2.png') }}" 
        alt="" 
        width="30" 
        height="24" 
        class="d-inline-block align-text-top">
        #CaucaAgroSostenible
    </a>

      <button class="navbar-toggler" 
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav px-5">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('/canastaAgricola') }}">CANASTA AGRICOLA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('/emprendimientos') }}">EMPRENDIMIENTOS Y ASOCIACIONES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('/agroOferta') }}">AGRO OFERTA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('/inversionistas') }}">INVERSIONISTAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('/eventos') }}">EVENTOS</a>
          </li>
          <li>
              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto ">
                          <!-- Authentication Links -->
                          @guest
                              @if (Route::has('login'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                              @endif

                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif
                          @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }}
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @role('Admin')
                                    <a class="dropdown-item" href="{{ route('/admin/home') }}">
                                          Dashboard
                                    </a>
                                    @endrole

                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                          {{ __('CERRAR SESIÓN') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest
                    </ul>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
