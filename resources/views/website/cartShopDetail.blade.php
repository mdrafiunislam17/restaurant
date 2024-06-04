@extends("website.layouts.master")
@section("title", "Food Cart Shop Detail")
@section("content")



<h2 class="checkout">Responsive Checkout Form</h2>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-success text-center">
                    <tr>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                        <th><i class="fa fa-trash"></i></th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <form action="" method="POST">
                        <tr>
                            <td class="image" data-title="No">
                                <img src="{{asset('asset/images/pizza-img-1.png')}}" height="70px" alt="">
                            </td>
                            <td class="menuItem-des" data-title="Description">
                                <p class="menuItem-name">Rafiun</p>
                            </td>
                            <td class="price" data-title="Price">
                                <span>$100</span>
                            </td>
                            <td class="qty" data-title="Qty">
                                <div class="input-group quantity">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary btn-decrement" type="button">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control text-center quantity-input" value="1" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-increment" type="button">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="total-amount cart_single_price" data-title="Total">
                                <span class="money">$1100</span>
                            </td>
                            <td class="action" data-title="Remove">
                                <a href="#"><i class="fa fa-trash text-dark"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-right">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </td>
                        </tr>
                    </form>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Cart Summary</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Cart Subtotal</strong>
                            <span>$100</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>You Pay</strong>
                            <span>$4000</span>

                        </li>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <a href="#" class="btn btn-primary me-2" role="button"> Checkout</a>
                            </div>
                            <div class="col-lg-8 pr-3">
                                <a href="#" class="btn btn-secondary" role="button">Continue Shopping</a>
                            </div>
                        </div>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <form action="#">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Billing Address</h3><br>
                        <div class="form-group">
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" class="form-control" id="fname" name="firstname" placeholder="John M. Doe">
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="john@example.com">
                        </div>
                        <div class="form-group">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" class="form-control" id="adr" name="address" placeholder="542 W. 15th Street">
                        </div>
                        <div class="form-group">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="New York">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="NY">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Payment</h3><br>
                        <label for="fname">Accepted Cards</label>
                        <div class="mb-3">
                            <i class="fa-brands fa-cc-visa" style="color:navy; font-size: 2em;"></i>
                            <i class="fa-brands fa-cc-amex" style="color:blue; font-size: 2em;"></i>
                            <i class="fa-brands fa-cc-mastercard" style="color:red; font-size: 2em;"></i>
                            <i class="fa-brands fa-cc-discover" style="color:orange; font-size: 2em;"></i>
                        </div>
                        <div class="form-group">
                            <label for="cname">Name on Card</label>
                            <input type="text" class="form-control" id="cname" name="cardname" placeholder="John More Doe">
                        </div>
                        <div class="form-group">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" class="form-control" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        </div>
                        <div class="form-group">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" class="form-control" id="expmonth" name="expmonth" placeholder="September">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" class="form-control" id="expyear" name="expyear" placeholder="2018">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cvv">CVV</label>
                                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h3 class="text-primary">Cash on Delivery</h3>
                        <hr class="mb-3"> <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="cashondelivery1" name="cashondelivery">
                            <label class="form-check-label" for="cashondelivery1">
                                Pay with cash upon delivery (COD)
                            </label>
                        </div>

                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" id="cashondelivery2" name="cashondelivery">
                            <label class="form-check-label" for="cashondelivery2">
                                Shipping address same as billing address
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg mt-2 mb-2">Continue to Checkout</button>


                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-12 lg-12">
            <div class="d-flex align-items-center mb-5 comment">
                <div class="flex-shrink-0">
                    <img src="https://avatars.discourse-cdn.com/v4/letter/c/ecc23a/48.png"
                         alt="User Avatar" width="48" height="48" style="border-radius: 50px">
                </div>
                <div class="flex-grow-1 ms-3 custom-card">
                    <h3 class="text-secondary d-inline-block pt-4 pl-2">Candace Kemp</h3>
                    <h3 class="text-dark text-right d-f">14 Oct 2024</h3>
                    <div class="text-warning pl-3" style="color: #ffc107;">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <span class="ms-1">10K Reviews</span>
                    </div>
                    <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aperiam aspernatur blanditiis
                        cumque dolorem eius error esse, est et, eveniet in ipsum iusto molestiae obcaecati
                        odio pariatur veritatis vitae voluptatem.</p>
                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 lg-12">
            <div class="d-flex align-items-center mb-5 comment">
                <div class="flex-shrink-0">
                    <img src="https://avatars.discourse-cdn.com/v4/letter/c/ecc23a/48.png"
                         alt="User Avatar" width="48" height="48" style="border-radius: 50px">
                </div>
                <div class="flex-grow-1 ms-3 custom-card">
                    <h3 class="text-secondary d-inline-block pt-4 pl-2">Mariam Herman</h3>
                    <h3 class="text-dark text-right d-f">14 Oct 2024</h3>
                    <div class="text-warning pl-3" style="color: #ffc107;">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <span class="ms-1">10K Reviews</span>
                    </div>
                    <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aperiam aspernatur blanditiis
                        cumque dolorem eius error esse, est et, eveniet in ipsum iusto molestiae obcaecati
                        odio pariatur veritatis vitae voluptatem.</p>
                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 lg-12">
            <div class="d-flex align-items-center mb-5 comment">
                <div class="flex-shrink-0">
                    <img src="https://avatars.discourse-cdn.com/v4/letter/c/ecc23a/48.png"
                         alt="User Avatar" width="48" height="48" style="border-radius: 50px">
                </div>
                <div class="flex-grow-1 ms-3 custom-card">
                    <h3 class="text-secondary d-inline-block pt-4 pl-2">Gretchen Garner</h3>
                    <h3 class="text-dark text-right d-f">14 Oct 2024</h3>
                    <div class="text-warning pl-3" style="color: #ffc107;">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <span class="ms-1">10K Reviews</span>
                    </div>
                    <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aperiam aspernatur blanditiis
                        cumque dolorem eius error esse, est et, eveniet in ipsum iusto molestiae obcaecati
                        odio pariatur veritatis vitae voluptatem.</p>
                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 lg-12">
            <div class="d-flex align-items-center mb-5 comment">
                <div class="flex-shrink-0">
                    <img src="https://avatars.discourse-cdn.com/v4/letter/c/ecc23a/48.png"
                         alt="User Avatar" width="48" height="48" style="border-radius: 50px">
                </div>
                <div class="flex-grow-1 ms-3 custom-card">
                    <h3 class="text-secondary d-inline-block pt-4 pl-2">Aiko Davidson</h3>
                    <h3 class="text-dark text-right d-f">14 Oct 2024</h3>
                    <div class="text-warning pl-3" style="color: #ffc107;">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <span class="ms-1">10K Reviews</span>
                    </div>
                    <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aperiam aspernatur blanditiis
                        cumque dolorem eius error esse, est et, eveniet in ipsum iusto molestiae obcaecati
                        odio pariatur veritatis vitae voluptatem.</p>
                </div>


            </div>
        </div>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Increment quantity
        $('.btn-increment').click(function() {
            var $input = $(this).closest('.quantity').find('.quantity-input');
            var value = parseInt($input.val(), 10);
            value = isNaN(value) ? 0 : value;
            value++;
            $input.val(value);
        });

        // Decrement quantity
        $('.btn-decrement').click(function() {
            var $input = $(this).closest('.quantity').find('.quantity-input');
            var value = parseInt($input.val(), 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) { // To prevent decrementing below 1
                value--;
            }
            $input.val(value);
        });
    });
</script>



@endsection


