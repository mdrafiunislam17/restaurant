@extends("website.layouts.master")
@section("title", "food cartShopDetail")
@section("content")

    <style>
        .custom-card{
            padding-left: 20px;
        }

        .input-group {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-group button {
            background-color: #000;
            border: 1px solid #ced4da;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            line-height: 0;
        }

        .input-group button:hover {
            background-color: #f0f0f0;
        }

        .input-group input {
            max-width: 30px;
            text-align: center;
        }
        .form-control1 {
            font-size: 18px;
            border: none;
            outline: none;
            box-shadow: none;
        }
        .custom-font-size {
            font-size: 35px;
        }
        .custom-price{
            font-size: 20px;
        }

        .form-control-lg {
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 3.2rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }
        .payment-form{
            font-size: 25px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .button{
            margin-left: 173px;
            margin-top: -40px;
            padding-top: 8px;
            padding-left: 36px;
        }

        @media (max-width: 768px) {
            .custom-font-size {
                font-size: 16px;
            }

            .custom-price {
                font-size: 16px;
            }

            .payment-form {
                font-size: 16px;
            }

            .button {
                margin-left: 0;
                margin-top: 20px;
                padding-left: 0;
                display: block;
                text-align: center;
            }

            .header ul li {
                display: block;
                text-align: center;
            }

            .social span, .social a {
                font-size: 16px;
                padding-left: 20px;
                padding-right: 5px;
            }
        }
    </style>

    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card shopping-cart">
                        <div class="card-body text-black">

                            <div class="row">
                                <div class="col-lg-6 px-5 py-4">
                                    <h3 class="mb-5 pt-2 text-center fw-bold text-uppercase">Your Foods</h3>

                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-shrink-0">
                                            <img src="{{asset('asset/images/pizza-img-1.png')}}"
                                                 class="img-fluid" style="width: 100px;" >
                                        </div>
                                        <div class="flex-grow-1 ms-3 custom-card">
                                            <h3 class="text-dark d-inline-block">Shrimp pizza</h3>
                                            <a href="#!" class="float-end text-dark d-inline-block " style="padding-left: 200px;"><i class="fa-solid fa-trash"></i></a>
                                            <div class="d-flex align-items-center">
                                                <p class="fw-bold mb-0 me-5 pe-3 custom-price">$799</p>
                                                <div class="input-group mb-3" style="width: 165px; padding-top: 10px;">
                                                    <button class="btn btn-white border px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-minus" style="margin-left: -3px;"></i>

                                                    </button>
                                                    <input type="text" class="form-control1 text-center" value="1" id="quantity" />
                                                    <button class="btn btn-white border px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-plus" style="margin-left: -3px;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-shrink-0">
                                            <img src="{{asset('asset/images/pizza-img-2.png')}}"
                                                 class="img-fluid" style="width: 100px;" >
                                        </div>
                                        <div class="flex-grow-1 ms-3 custom-card">
                                            <h3 class="text-dark d-inline-block">Seafood pizza</h3>
                                            <a href="#!" class="float-end text-dark d-inline-block " style="padding-left: 200px;"><i class="fa-solid fa-trash"></i></a>
                                            <div class="d-flex align-items-center">
                                                <p class="fw-bold mb-0 me-5 pe-3 custom-price">$799</p>
                                                <div class="input-group mb-3" style="width: 165px; padding-top: 10px;">
                                                    <button class="btn btn-white border px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-minus" style="margin-left: -3px;"></i>

                                                    </button>
                                                    <input type="text" class="form-control1 text-center" value="1" id="quantity" />
                                                    <button class="btn btn-white border px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-plus" style="margin-left: -3px;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-shrink-0">
                                            <img src="{{asset('asset/images/pizza-img-3.png')}}"
                                                 class="img-fluid" style="width: 100px;" >
                                        </div>
                                        <div class="flex-grow-1 ms-3 custom-card">
                                            <h3 class="text-dark d-inline-block">Cheese pizza</h3>
                                            <a href="#!" class="float-end text-dark d-inline-block " style="padding-left: 200px;"><i class="fa-solid fa-trash"></i></a>
                                            <div class="d-flex align-items-center">
                                                <p class="fw-bold mb-0 me-5 pe-3 custom-price">$799</p>
                                                <div class="input-group mb-3" style="width: 165px; padding-top: 10px;">
                                                    <button class="btn btn-white border px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-minus" style="margin-left: -3px;"></i>

                                                    </button>
                                                    <input type="text" class="form-control1 text-center" value="1" id="quantity" />
                                                    <button class="btn btn-white border px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                                        <i class="fas fa-plus" style="margin-left: -3px;"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <hr class="mb-4" style="height: 2px; background-color: #1266f1; opacity: 1;">

                                    <div class="d-flex justify-content-between px-x custom-font-size">
                                        <p class="fw-bold">Discount:</p>
                                        <p class="fw-bold">$95</p>
                                    </div>
                                    <div class="d-flex justify-content-between p-2 mb-2 custom-font-size" style="background-color: #e1f5fe;">
                                        <p class="fw-bold mb-0">Total:</p>
                                        <p class="fw-bold mb-0">$2261</p>
                                    </div>

                                </div>


                                <div class="col-lg-6 px-5 py-4">
                                    <h1 class="mb-5 pt-2 text-center fw-bold text-uppercase">Payment</h1>
                                    <form class="mb-5">
                                        <div class="form-outline mb-5">
                                            <label class="form-label payment-form" for="typeText">Card Number</label>
                                            <input type="text" id="typeText" class="form-control form-control-lg" size="20"
                                                   value="1234 5678 9012 3457" minlength="19" maxlength="19" />

                                        </div>

                                        <div class="form-outline mb-5">
                                            <label class="form-label payment-form" for="typeName">Name on card</label>
                                            <input type="text" id="typeName" class="form-control form-control-lg" size="17"
                                                   value="John Smith" />

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-5">
                                                <div class="form-outline">
                                                    <label class="form-label payment-form" for="typeExp">Expiration</label>
                                                    <input type="text" id="typeExp" class="form-control form-control-lg" value="01/22"
                                                           size="7" minlength="7" maxlength="7" />

                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-5">
                                                <div class="form-outline">
                                                    <label class="form-label payment-form" for="typeCvv">Cvv</label>
                                                    <input type="password" id="typeCvv" class="form-control form-control-lg"
                                                           value="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />

                                                </div>
                                            </div>
                                        </div>

                                        <p class="mb-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit <a
                                                href="#!">obcaecati sapiente</a>.</p>

                                        <button type="button" class="btn bg-primary btn-lg button">Buy now</button>
                                        <h5 class="fw-bold mb-5" style="position: absolute; bottom: 0;">
                                            <a href="{{route('website.shopDetails')}}" style="font-size: 20px;"><i class="fas fa-angle-left me-2"></i>Back to shopping</a>
                                        </h5>
                                    </form>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <script>
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
