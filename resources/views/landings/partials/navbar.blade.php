<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
    <a href="/" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary">
            <img class="img-fluid me-2" src="admin/images/logo-unimal.png" alt="" style="width: 45px;">SI-Repo
        </h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                <div class="dropdown-menu shadow-sm m-0">
                    <a href="/kategori-repo-kp" class="dropdown-item">Repository KP</a>
                    <a href="/kategori-repo-tga" class="dropdown-item">Repository TGA</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">

            {{-- <a class="btn btn-square rounded-circle bg-light text-primary me-2" href=""><i
                    class="fab fa-instagram"></i></a> --}}
            <a class="btn btn-outline-primary bg-light text-primary me-0" href="{{ route('auth') }}">Login</a>
        </div>
    </div>
</nav>
