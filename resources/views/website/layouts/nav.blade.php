<header class="header bg-dark sticky-top">
    <div class="container">
        <nav class="navbar mb-3 navbar-expand-lg navbar-light bg-dark">
            <a href="#" class="navbar-brand">
                <img src="{{asset('asset/images/logo.png')}}" class="d-inline-block align-top" width="100%" height="50px" alt="Footcap logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('website.home') ? 'active' : '' }}" href="{{route('website.home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link text-white {{ request()->routeIs('website.menu') ? 'active' : '' }}" href="{{route('website.menu')}}">Menu</a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link text-white {{ request()->routeIs('website.about') ? 'active' : '' }}" href="{{route('website.about')}}">About</a>
                    </li>
                    <li class="nav-item pl-4">
                        <a class="nav-link text-white {{ request()->routeIs('website.contact') ? 'active' : '' }}" href="{{route('website.contact')}}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto d-flex align-items-center">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-user text-white" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item pl-4">
                        <a href="{{route('website.cartShopDetails')}}" class="nav-link">
                            <i class="fa-solid fa-cart-shopping text-white"></i>
                        </a>
                    </li>
                    <li class="nav-item pl-4">
                        <form class="form-inline" action="/search" method="GET">
                            <button type="submit" class="btn btn-link" aria-label="Search">
                                <i class="fa fa-search text-white" aria-hidden="true"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
