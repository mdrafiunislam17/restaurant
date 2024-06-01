<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}">
    <link rel="shortcut icon" href="{{asset('asset/images/favicon.png')}}" type="">
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
    <title> Card Shop Detail</title>
    <style>
        body {

            font-size: 17px;
            padding: 8px;
            background-color: #f2f2f2;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;

        }

        input[type=text] {
            width: 100%;
            margin-bottom: 30px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #fff;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        .product-container {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .product-image {
            width: 100px;
            margin-top: 15px;
        }
        .quantity-controls {
            display: flex;
            align-items: center;
        }
        .btn-white {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px 12px;
        }
        .btn-white i {
            margin-left: -3px;
        }
        .form-control1 {
            width: 50px;
            text-align: center;
            margin: 0 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            height: 38px;
        }



        .product-container {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .product-image {
            width: 100px;
            margin-right: 15px;
        }
        .quantity-controls {
            display: flex;
            align-items: center;
            margin-left: 10px;
        }
        .button {
            background-color: black;
            border: 1px solid #ccc;
            width: 50px;
            border-radius: 50px;
            padding-left: 17px;
        }
        .input{
            color: black;
            border-radius: 50px !important;
            margin-top: 30px !important;
            width: 50px !important;
        }
        .cardb{
            margin-top: -90px;
            padding-left: 470px;
        }
        .price1{
            padding-left: 550px;
        }

        .comment{
            margin-top: 50px;
            padding: 15px;
        }

        .custom-card{
            padding-left: 75px;
            margin-top: -60px;
        }
        .header{
            background-color: #00000080;
            margin-top: -15px;

        }
        .header ul li a {
            color: rgb(255, 255, 255) ;
        }



        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<div class="hero_area" style="margin-top: 7px; background-color: #797979;">

    <!-- header section strats -->
    <header class="header_section" >
        <div class="container"   style="background-color: #797979;" >
            <a href="#" class="logo">
                <img src="{{asset('asset/images/logo.png')}}" width="60px" height="60px" alt="Footcap logo">
            </a>

            <nav class="navbar navbar-expand-lg custom_nav-container">
                <ul class="navbar-list" style="margin-top: -60px; font-size: 20px;">
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

                <ul class="nav-action-list" style="margin-top: -60px; font-size: 20px;">
                    <li class="nav-item">
                        <a href="" class="user_link">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('website.cartShopDetails')}}">
                            <i class="fa fa-shopping-cart text-white"></i>

                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="form" action="/search" method="GET">
                            <button type="submit" aria-label="Search" style="color: white;">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

</div>

<br><br>

<h2 style="text-align: center; font-size: 40px; font-family: 'Times New Roman', Times, serif;">Responsive Checkout Form</h2>
<div class="row">
    <div class="col-75">
        <div class="container">
            <h1>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h1>

            <p class="product-container">
                <img src="{{asset('asset/images/pizza-img-1.png')}}" class="img-fluid product-image" alt="">
            <div class="quantity-controls cardb">
                <button class="btn  button" type="button" id="button-addon1">
                    <i class="fa fa-minus"></i>
                </button>
                <input type="text" class="form-control1 text-center input" value="1" id="quantity" />
                <button class="btn button" type="button" id="button-addon2">
                    <i class="fa fa-plus"></i>
                </button>
                <span class="price1" id="price"><b>$15</b></span>
            </div>


            <p class="product-container">
                <img src="{{asset('asset/images/pizza-img-2.png')}}" class="img-fluid product-image" alt="">
            <div class="quantity-controls cardb">
                <button class="btn  button" type="button" id="button-addon1">
                    <i class="fa fa-minus"></i>
                </button>
                <input type="text" class="form-control1 text-center input" value="1" id="quantity" />
                <button class="btn button" type="button" id="button-addon2">
                    <i class="fa fa-plus"></i>
                </button>
                <span class="price1" id="price"><b>$15</b></span>
            </div>


            <p class="product-container">
                <img src="{{asset('asset/images/pizza-img-3.png')}}" class="img-fluid product-image" alt="">
            <div class="quantity-controls cardb">
                <button class="btn  button" type="button" id="button-addon1">
                    <i class="fa fa-minus"></i>
                </button>
                <input type="text" class="form-control1 text-center input" value="1" id="quantity" />
                <button class="btn button" type="button" id="button-addon2">
                    <i class="fa fa-plus"></i>
                </button>
                <span class="price1" id="price"><b>$15</b></span>
            </div>


            <p class="product-container">
                <img src="{{asset('asset/images/pizza-img-4.png')}}" class="img-fluid product-image" alt="">
            <div class="quantity-controls cardb">
                <button class="btn  button" type="button" id="button-addon1">
                    <i class="fa fa-minus"></i>
                </button>
                <input type="text" class="form-control1 text-center input" value="1" id="quantity" />
                <button class="btn button" type="button" id="button-addon2">
                    <i class="fa fa-plus"></i>
                </button>
                <span class="price1" id="price"><b>$15</b></span>
            </div>




            <p style="padding-top: 35px;">Total <span class="price" style="color:black; padding-right: 20px;" ><b>$30</b></span></p>
        </div>
    </div>
</div>
<div class="row" style="margin-top: 40px;">
    <div class="col-75">
        <div class="container">
            <form action="#">

                <div class="row">

                    <div class="col-50">
                        <h3>Billing Address</h3><br>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="New York">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="NY">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3><br>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Name on Card</label>
                        <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row mt-4">
                    <div class="col-50">
                        <h3>Cash on Delivery</h3>
                        <label class="checkbox-container" style="padding-top: 20px;">
                            <input type="checkbox" id="cashondelivery" name="cashondelivery">
                            <span class="checkmark" style="margin-top: -20px;"></span>
                            Select this option to pay with cash upon delivery
                        </label>

                        <label class="checkbox-container" style="padding-top: 20px;">
                            <input type="checkbox" id="cashondelivery" name="cashondelivery">
                            <span class="checkmark" style="margin-top: -20px;"></span>
                            The shipping address is the same as billing
                        </label>


                    </div>
                </div>

                <input type="submit" value="Continue to checkout"
                        style="border-radius: 10px;
                        width: 200px;
                        background-color: #04AA6D;
                        color: white;
                        padding: 16px;
                        margin: 10px 0;">
            </form>
            <div class="row">
                <div class="col-12 lg-12">
                    <div class="d-flex align-items-center mb-lg-5 comment">
                        <div class="flex-shrink-0">
                            <img src="https://avatars.discourse-cdn.com/v4/letter/c/ecc23a/48.png"
                                 alt="" width="48" height="48" style="border-radius: 50px">

                        </div>
                        <div class="flex-grow-1 ms-3 custom-card">
                            <h3 class="text-secondary userName" style="font-weight: bold; display: inline-block;">Candace Kemp</h3>
                            <h3 href="#!" class="float-end text-dark " style="padding-left: 900px; display: inline-block;">Oct 2024</h3><br><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aperiam aspernatur blanditiis
                                cumque dolorem eius error esse, est et, eveniet in ipsum iusto molestiae obcaecati
                                odio pariatur veritatis vitae voluptatem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 lg-12">
                    <div class="d-flex align-items-center mb-lg-5 comment">
                        <div class="flex-shrink-0">
                            <img src="https://avatars.discourse-cdn.com/v4/letter/c/ecc23a/48.png"
                                 alt="" width="48" height="48" style="border-radius: 50px">

                        </div>
                        <div class="flex-grow-1 ms-3 custom-card">
                            <h3 class="text-secondary userName" style="font-weight: bold; display: inline-block;">Mariam Herman</h3>
                            <h3 href="#!" class="float-end text-dark " style="padding-left: 900px; display: inline-block;">Oct 2024</h3><br><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aperiam aspernatur blanditiis
                                cumque dolorem eius error esse, est et, eveniet in ipsum iusto molestiae obcaecati
                                odio pariatur veritatis vitae voluptatem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 lg-12">
                    <div class="d-flex align-items-center mb-lg-5 comment">
                        <div class="flex-shrink-0">
                            <img src="https://avatars.discourse-cdn.com/v4/letter/c/ecc23a/48.png"
                                 alt="" width="48" height="48" style="border-radius: 50px">

                        </div>
                        <div class="flex-grow-1 ms-3 custom-card">
                            <h3 class="text-secondary userName" style="font-weight: bold; display: inline-block;">Gretchen Garner</h3>
                            <h3 href="#!" class="float-end text-dark " style="padding-left: 900px; display: inline-block;">Oct 2024</h3><br><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aperiam aspernatur blanditiis
                                cumque dolorem eius error esse, est et, eveniet in ipsum iusto molestiae obcaecati
                                odio pariatur veritatis vitae voluptatem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 lg-12">
                    <div class="d-flex align-items-center mb-lg-5 comment">
                        <div class="flex-shrink-0">
                            <img src="https://avatars.discourse-cdn.com/v4/letter/c/ecc23a/48.png"
                                 alt="" width="48" height="48" style="border-radius: 50px">

                        </div>
                        <div class="flex-grow-1 ms-3 custom-card">
                            <h3 class="text-secondary userName" style="font-weight: bold; display: inline-block;">Aiko Davidson</h3>
                            <h3 href="#!" class="float-end text-dark " style="padding-left: 900px; display: inline-block;">Oct 2024</h3><br><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aperiam aspernatur blanditiis
                                cumque dolorem eius error esse, est et, eveniet in ipsum iusto molestiae obcaecati
                                odio pariatur veritatis vitae voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- Ensure jQuery is included before this script -->
<script src="{{url("https://code.jquery.com/jquery-3.6.0.min.js")}}"></script>

<script>
    $(document).ready(function() {
        // Increment quantity
        $(".button#button-addon2").click(function() {
            var input = $(this).prev();
            var currentValue = parseInt(input.val());
            input.val(currentValue + 1);
        });

        // Decrement quantity
        $(".button#button-addon1").click(function() {
            var input = $(this).next();
            var currentValue = parseInt(input.val());
            if (currentValue > 1) {
                input.val(currentValue - 1);
            }
        });
    });
</script>


</body>
</html>
