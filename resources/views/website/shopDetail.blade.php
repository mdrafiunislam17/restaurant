@extends("website.layouts.master")
@section("title", "food index")
@section("content")

<style>
    .slider {
        position: relative;
        width: 100%;
        max-width: 600px;
        overflow: hidden;
        border-radius: 10px;
    }

    .slides {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
        min-width: 100%;
        box-sizing: border-box;
    }

    .slide img {
        width: 100%;
        display: block;
        border-radius: 10px;
        transition: transform 0.5s ease, transform-origin 0.5s ease;
    }

    /* Zoom to the right */
    .slide img:hover {
        transform: scale(1.1);
        transform-origin: right center;
    }

    .slider2 {
        display: flex;
        transition: transform 0.5s ease-in-out;
        justify-content: center;
        margin-top: 10px;
    }

    .slider2 img {
        width: auto;
        height: 100px;
        cursor: pointer;
        margin: 0 5px;
        border-radius: 10px;
    }

    .prev, .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 15px;
        cursor: pointer;
        border-radius: 50%;
        user-select: none;
        display: none; /* Hide the buttons initially */
    }

    .slider:hover .prev,
    .slider:hover .next {
        display: block; /* Show buttons on hover */
    }

    .prev {
        left: 10px;
    }

    .next {
        right: 10px;
    }

    .header{
        background-color: #00000080;
        margin-top: -15px;

    }
    .header ul li a {
        color: rgb(255, 255, 255) ;
    }

    /* CSS code to improve the design */
    .input-group {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .input-group button {
        background-color: #000;
        border: 1px solid #ced4da;
        border-radius: 50%;
        width: 40px;
        height: 45px;
        line-height: 0;
    }

    .input-group button:hover {
        background-color: #f0f0f0;
    }

    .input-group input {
        max-width: 50px;
        text-align: center;
    }
    .form-control {
        font-size: 30px;
        border: none;
        outline: none;
        box-shadow: none;
    }

    .btn {
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
    }

    .btn-warning {
        background-color: #ffc107;
        color: #fff;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-light {
        background-color: #f8f9fa;
        color: #212529;
    }

    .btn-light.border {
        border-color: #6c757d;
    }

    .icon-hover:hover .fa {
        color: red; /* Change color on hover */
    }

    .shadow-none {
        box-shadow: none !important;
    }

    .py-2 {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
    }

    .px-3 {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
    }

    .me-1 {
        margin-right: 0.25rem !important;
    }

    .social span {
        font-size: 20px;
        padding-left: 50px !important;
    }
    .social a{
        font-size: 20px;
        padding-left: 50px;
        padding-right: 10px;
    }
    @media (max-width: 768px) {
        .ps-lg-3 {
            padding-left: 0 !important;
        }

        .input-group {
            justify-content: flex-start;
        }

        .input-group button,
        .input-group input {
            max-width: 35px;
            max-height: 35px;
        }

        .btn {
            width: 100%;
            margin-bottom: 10px;
        }

        .btn-warning,
        .btn-primary,
        .btn-info {
            width: 100%;
        }

        .slider2 img {
            height: 60px;
        }
    }
    .rating-main {
    display: flex;
    align-items: center;
    }

    .rating {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    }

    .rating li {
    margin-right: 5px; /* Adjust spacing between stars as needed */
    }

    .total-review {
    margin-left: 10px; /* Adjust spacing between stars and the review count as needed */
    }



</style>

    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="slider">
                        <div class="slides">
                            <img class="slide" src="{{ asset("storage/uploads/menuItems/$menuItem->image") }}" alt="{{ $menuItem->name }}">
                        </div>
                        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                        <button class="next" onclick="changeSlide(1)">&#10095;</button>
                    </div>
                    <div class="slider2">
                        <img class="gc-overlay-display" src="{{ asset("storage/uploads/menuItems/$menuItem->image") }}"
                             alt="{{ $menuItem->name }}" height="100px" onclick="currentSlide(0)">
                    </div>
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h1 class="title text-dark">{{ $menuItem->name }}</h1>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <div class="rating-main">
                                    <ul class="rating">
                                        @php
                                            $reviews = $menuItem->getReview; // Fetch the related reviews
                                            $rate = $reviews ? ceil($reviews->avg('rate')) : 0; // Check if reviews exist and calculate the average rating
                                        @endphp

                                        @for($i = 1; $i <= 5; $i++)
                                            @if($rate >= $i)
                                            <li><i class="fa-solid fa-star"></i></li>
                                            @else
                                            <li><i class="fa-regular fa-star"></i></li> <!-- Use fa-star-o for empty stars -->
                                            @endif
                                        @endfor
                                    </ul>
                                    <a href="#" class="total-review">({{ $reviews ? $reviews->count() : 0 }}) Review</a>
                                </div>
                            </div>

                        </div>

                        <div class="mb-3">
                            <span style="font-weight: bold; font-size:30px" >
                                $@php
                                    $after_discount = $menuItem->price - (($menuItem->price * $menuItem->discount) / 100);
                                @endphp
                                {{ number_format($after_discount, 2) }}
                                <!-- Display the calculated price with two decimal places -->
                            </span>
                        </div>

                        <p>{{ $menuItem->description }}</p>
                        <p>Category :{{$menuItem->name}}</p>
                        <p>Sub Category :{{$menuItem->slug}}</p>

                        <hr/>
                        <div class="product-buy">
                            <form action="{{route('singleAddToCart',['menuItem' => $menuItem->slug])}}" method="post">
                                @csrf
                                <div class="row mb-4">

                                    <div class="col-md-4 col-6 mb-3">
                                        <label class="mb-2 d-block">Quantity</label>
                                        <div class="input-group mb-3" style="width: 170px;">
                                            <button class="btn btn-white border px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input type="text" class="form-control text-center" value="{{ $quantity }}" id="quantity" />
                                            <button class="btn btn-white border px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>


                                <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
                                <a href="{{route('wishlist-count',$menuItem->slug)}}"
                                class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                                <a href="{{route('wishlist-count',$menuItem->slug)}}" class="btn btn-info"> <i class="me-1 fa fa-heart "></i>Save </a>

                            </form>

                        </div>



                    </div>
                </main>
            </div>
        </div>
    </section>
<script src="{{url('https://code.jquery.com/jquery-3.6.0.min.js')}}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script>
        let currentSlideIndex = 0;

        function changeSlide(direction) {
            const $slides = $('.slides');
            const totalSlides = $slides.children().length;

            currentSlideIndex = (currentSlideIndex + direction + totalSlides) % totalSlides;

            const offset = -currentSlideIndex * 100;
            $slides.css('transform', `translateX(${offset}%)`);
        }

        function currentSlide(index) {
            currentSlideIndex = index;
            const $slides = $('.slides');
            const offset = -currentSlideIndex * 100;
            $slides.css('transform', `translateX(${offset}%)`);
        }

        function autoSlide() {
            changeSlide(1);
        }

        $(document).ready(function() {
            setInterval(autoSlide, 3000); // Change slide every 3 seconds

            // Debugging code to check thumbnail clicks
            $('.slider2 img').on('click', function() {
                console.log("Thumbnail clicked, index:", $(this).index());
                currentSlide($(this).index());
            });
        });

        $(document).ready(function(){
            $('#button-addon1').click(function(){
                var quantity = parseInt($('#quantity').val());
                if(quantity > 1){
                    $('#quantity').val(quantity - 1);
                }
            });
            $('#button-addon2').click(function(){
                var quantity = parseInt($('#quantity').val());
                $('#quantity').val(quantity + 1);
            });
        });
    </script>



@endsection


