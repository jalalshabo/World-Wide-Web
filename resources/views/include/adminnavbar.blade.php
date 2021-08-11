<nav class="navbar navbar-expand-lg navbar-light sticky-top py-0">
    <div class="container-fluid">
        <a class="navbar-brand mx-3" href="/">
        <img src="{{ asset('images/nav-logo.svg') }}" height="50" alt="" loading="lazy" />
        </a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-fill w-100">
                <li class="nav-item">
                <a
                    class="nav-link active fw-bold"
                    aria-current="page"
                    href="/User"
                    >Edit Users</a
                >
                </li>
                <li class="nav-item">
                <a class="nav-link active fw-bold" href="/Course">Edit Courses</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active fw-bold" href="/Course/create">Add Course</a>
                    </li>


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
                <li class="nav-item">

                        <a class="nav-link active fw-bold" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>



