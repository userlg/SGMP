<nav class="navbar navbar-expand-lg navbar-light sgmp-bg  sgmp-font">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('home') }} ">SGMP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
