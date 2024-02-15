<nav class="navbar navbar-expand-lg bg-body-tertiary">
    @auth
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">
                <img class="logo" src="./assets/agclogo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == 'internet' ? 'active' : '' }}"
                            href="{{ route('internet') }}">Internet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == 'promos' ? 'active' : '' }}"
                            href="{{ route('promos') }}">Promos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == 'contactus' ? 'active' : '' }}"
                            href="{{ route('contactus') }}">ContactUS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ \Request::route()->getName() == 'applynow' ? 'active' : '' }}"
                            href="{{ route('applynow') }}">ApplyNow</a>
                    </li>
                </ul>
                @else
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img class="logo" src="./assets/agclogo.png">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ \Request::route()->getName() == 'internet' ? 'active' : '' }}"
                                    href="{{ route('internet') }}">Internet</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ \Request::route()->getName() == 'promos' ? 'active' : '' }}"
                                    href="{{ route('promos') }}">Promos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ \Request::route()->getName() == 'contactus' ? 'active' : '' }}"
                                    href="{{ route('contactus') }}">ContactUS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ \Request::route()->getName() == 'applynow' ? 'active' : '' }}"
                                    href="{{ route('applynow') }}">ApplyNow</a>
                            </li>
                        </ul>
                    @endauth

                    @if (Route::has('login'))
                        <div class="nav-item ">
                            @auth
                                <div class="-me-2 flex items-center sm:hidden">
                                    <button @click="open = ! open"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Log in</a>
                            @endauth
                        </div>
                    @endif
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
