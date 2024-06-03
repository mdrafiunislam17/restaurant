<header class="header" data-header>

    <div class="container">
        <div class="overlay" data-overlay></div>

        <a href="#" class="logo">
            <img src="{{asset('asset/images/logo.png')}}" width="100%" height="50px" alt="Footcap logo">
        </a>

        <ul class="navbar-list">

            <li class="navbar-item">
                <a class="nav-link" href="{{route('website.home')}}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="navbar-item">
                <a class="nav-link" href="{{route('website.menu')}}">Menu</a>
            </li>

            <li class="navbar-item">
                <a class="nav-link" href="{{route('website.about')}}">About</a>
            </li>

            <li class="navbar-item">
                <a class="nav-link" href="{{route('website.bookTable.blade.php')}}">Book Table</a>
            </li>

        </ul>

        <ul class="nav-action-list">
            <li>
                <div class="user_option">
                    <a href="" class="user_link">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>
                    <a href="{{route('website.cartShopDetails')}}"><i class="fa-solid fa-cart-shopping text-white"></i></a>
                    <form class="form" action="/search" method="GET">
                        <button type="submit" aria-label="Search">
                            <i class="fa fa-search text-white" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </li>
        </ul>


    </div>
</header>


