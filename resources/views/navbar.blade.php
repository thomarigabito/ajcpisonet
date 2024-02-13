{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img class="logo" src="./assets/agclogo.png">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ (\Request::route()->getName() == 'internet') ? 'active' : '' }}"  href="{{route('internet')}}">Internet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (\Request::route()->getName() == 'promos') ? 'active' : '' }}"  href="{{route('promos')}}">Promos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (\Request::route()->getName() == 'contactus') ? 'active' : '' }}"  href="{{route('contactus')}}">ContactUS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ (\Request::route()->getName() == 'applynow') ? 'active' : '' }}"  href="{{route('applynow')}}">ApplyNow</a>
          </li>
        </ul>
        @if (Route::has('login'))
                <div class="nav-item ">
                    @auth
                        <a class="nav-link" href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}" >Log in</a>
                    @endauth
                </div>
        @endif
      </div>
    </div>
  </nav> --}}
  


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>





















{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            Logo Here
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            @auth
            <li class="nav-item">
                <a class="nav-link" href="#">Bill</a>
            </li>         
        @else
            <li class="nav-item">
                <a class="nav-link" href="#">Internet</a>
            
        @endauth
         @if (Route::has('login'))
                <div class="nav-item ">
                    @auth
                        <a class="nav-link {{ (\Request::route()->getName() == '#') ? 'active' : '' }}" href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a class="nav-link {{ (\Request::route()->getName() == '#') ? 'active' : '' }}" href="{{ route('login') }}" >Log in</a>
                    @endauth
                </div>
        @endif
      </div>
    </div>
  </nav> --}}


  