<div class="hero_area" style="margin-top: -15px;">
    <div class="bg-box">
        <img src="{{asset('asset/images/hero-bg.jpg')}}" alt="">
    </div>
    <section class="slider_section ">
        <div id="customCarousel1">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        Fast Food Restaurant
                                    </h1>
                                    <p>
                                        Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Order Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- header section strats -->
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
            </ul>


        </div>
    </header>
</div>


