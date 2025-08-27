<header>
    <nav
        class="navbar nav-border mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white no-background">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand smooth-menu" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo-light.png') }}" class="logo logo-display" alt="Logo" />
                    <img src="{{ asset('assets/img/logo-light.png') }}" class="logo logo-scrolled" alt="Logo" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <img src="{{ asset('assets/img/logo-icon.png') }}" alt="Logo" />
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li><a class="smooth-menu" href="{{ url('/') }}">Beranda</a></li>
                    <li class="dropdown dropdown-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('articles.byCategory', 'Obat') }}">Obat</a></li>
                            <li><a href="{{ route('articles.byCategory', 'Pangan') }}">Pangan</a></li>
                            <li><a href="{{ route('articles.byCategory', 'Kosmetik') }}">Kosmetik</a></li>
                            <li><a href="{{ route('articles.byCategory', 'Obat Tradisional') }}">Obat Tradisional</a>
                            </li>
                            <li><a href="{{ route('articles.byCategory', 'Suplemen Kesehatan') }}">Suplemen
                                    Kesehatan</a></li>
                            <li><a href="{{ route('articles.byCategory', 'Materi FKP') }}">Materi FKP</a></li>
                        </ul>
                    </li>
                    <li><a class="smooth-menu" href="{{ url('kontak-kami') }}">Kontak Kami</a></li>
                </ul>
            </div>
            <input type="hidden" name="category" value="{{ $categoryName ?? '' }}">
        </div>
        <div class="overlay-screen"></div>
    </nav>
</header>
