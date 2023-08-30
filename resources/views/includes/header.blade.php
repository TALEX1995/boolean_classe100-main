{{-- Header --}}
<header>
    {{-- Nav --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            {{-- Brand --}}
            <a class="navbar-brand" href="#">Classe 100</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- Navbar --}}
            <div class="collapse navbar-collapse" id="navbar">
                {{-- Nav Link --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students.index') }}">Studenti</a>
                    </li>
                </ul>
                {{-- Search --}}
                <form class="d-flex" role="search" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search_term"
                        aria-label="Search" value="{{ $term ?? '' }}">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
