<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo Here</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" class="text-center" aria-current="page" href="#">Internet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Promos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ContactUS</a>
          </li>
        </ul>
         @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" >Log in</a>
                    @endauth
                </div>
        @endif
      </div>
    </div>
  </nav>