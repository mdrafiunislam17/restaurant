@extends("website.layouts.master")
@section("title", "food index")
@section("content")









<!-- offer section -->

<section class="offer_section layout_padding-bottom">
    <div class="offer_container">
        <div class="container ">
            <div class="row">
                <div class="col-md-6  ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="{{asset('asset/images/o1.jpg')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Tasty Thursdays
                            </h5>
                            <h6>
                                <span>20%</span> Off
                            </h6>
                            <a href="{{route('website.shopDetails')}}">
                                Order Now <i class="fa-solid fa-cart-shopping text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  ">
                    <div class="box ">
                        <div class="img-box">
                            <img src="{{asset('asset/images/o2.jpg')}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Pizza Days
                            </h5>
                            <h6>
                                <span>15%</span> Off
                            </h6>
                            <a href="{{route('website.shopDetails')}}">
                                Order Now<i class="fa-solid fa-cart-shopping text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end offer section -->

<!-- food section -->

    @include('website.layouts.menu')

<!-- end food section -->

<!-- about section -->

@include('website.layouts.about')

<!-- end about section -->

<!-- book section -->
@include('website.layouts.bookTable')
<!-- end book section -->


@endsection
