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
        height: 40px;
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


</style>

    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="slider">
                        <div class="slides">
                            <div class="slide"><img src="{{asset('asset/images/pizza-img-1.png')}}" alt="pizza-img-1"></div>
                            <div class="slide"><img src="{{asset('asset/images/pizza-img-2.png')}}" alt="pizza-img-2"></div>
                            <div class="slide"><img src="{{asset('asset/images/pizza-img-3.png')}}" alt="pizza-img-3"></div>
                            <div class="slide"><img src="{{asset('asset/images/pizza-img-4.png')}}" alt="pizza-img-4"></div>
                            <div class="slide"><img src="{{asset('asset/images/pizza-img-5.png')}}" alt="pizza-img-5"></div>
                        </div>
                        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
                        <button class="next" onclick="changeSlide(1)">&#10095;</button>
                    </div>
                    <div class="slider2">
                        <img class="gc-overlay-display" alt="pizza-img-1" src="{{asset('asset/images/pizza-img-1.png')}}" height="100px" onclick="currentSlide(0)">
                        <img class="gc-overlay-display" alt="pizza-img-2" src="{{asset('asset/images/pizza-img-2.png')}}" height="100px" onclick="currentSlide(1)">
                        <img class="gc-overlay-display" alt="pizza-img-3" src="{{asset('asset/images/pizza-img-3.png')}}" height="100px" onclick="currentSlide(2)">
                        <img class="gc-overlay-display" alt="pizza-img-4" src="{{asset('asset/images/pizza-img-4.png')}}" height="100px" onclick="currentSlide(3)">
                        <img class="gc-overlay-display" alt="pizza-img-5" src="{{asset('asset/images/pizza-img-5.png')}}" height="100px" onclick="currentSlide(4)">
                    </div>
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h1 class="title text-dark">Shrimp Pizza</h1>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">80K Reviews</span>
                            </div>
                            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                            <span class="text-success ms-2">In stock</span>
                        </div>

                        <div class="mb-3">
                            <span class="h5">$75.00</span>
                        </div>

                        <p style="font-size: 18px; font-family: 'Times New Roman', Times, serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Semper sagittis dolor aliquet quam feugiat nisi
                            a ultrices feugiat. Viverra facilisi turpis eget tempor. Mattis risus amet euismod eleifend.
                        </p>

                        <div class="row">
                            <dt class="col-3">Category :</dt>
                            <dd class="col-9">Chicken, Lunch, Pizza, Burger</dd>

                            <dt class="col-3">Tags :</dt>
                            <dd class="col-9">Healthy, Organic, Chicken, Sauce</dd>
                        </div>

                        <hr/>

                        <div class="row mb-4">
                            <div class="col-md-4 col-6 mb-3">
                                <label class="mb-2 d-block">Quantity</label>
                                <div class="input-group mb-3" style="width: 170px;">
                                    <button class="btn btn-white border px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" class="form-control text-center" value="1" id="quantity" />
                                    <button class="btn btn-white border px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>

                        </div>


                        <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
                        <a href="{{route('website.cartShopDetails')}}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                        <a href="#" class="btn btn-info"> <i class="me-1 fa fa-heart "></i>Save </a>


                    </div>
                </main>
            </div>
        </div>
    </section>

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


