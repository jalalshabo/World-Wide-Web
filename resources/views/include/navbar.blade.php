

<!-- Navbar-->
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
                    href="facultystaff"
                    >Faculty and Staff</a
                >
                </li>
                <li class="nav-item">
                <a class="nav-link active fw-bold" href="#">Future Students</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active fw-bold" href="schoolmap"
                    >School Map</a
                >
                </li>
                <li class="nav-item">
                <a class="nav-link active fw-bold" href="#">Research Page</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active fw-bold" href="aboutus"
                    >About Us</a
                >
                <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle active fw-bold"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                    <a class="dropdown-item fw-bold" href="{{ route('login') }}">Admin Login</a>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                    <a class="dropdown-item fw-bold" href="{{ route('login') }}"
                        >Student Login</a
                    >
                    </li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
