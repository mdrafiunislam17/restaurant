@extends("website.layouts.master")
@section("title", "Food About")
@section("content")

    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-4">
                    <!-- Display success message if present -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Shipping Info Card -->
                    <div class="card mb-4 border shadow-0">
                        <div class="p-4">
                            <h5 class="card-title mb-3">Shipping Info</h5>
                            <div class="row mb-3">
                                <div class="col-lg-4 mb-3">
                                    <!-- Express Delivery Option -->
                                    <div class="form-check h-100 border rounded-3">
                                        <div class="p-3">
                                            <input class="form-check-input" type="radio" name="shippingOption" id="expressDelivery" value="express" checked />
                                            <label class="form-check-label" for="expressDelivery">
                                                Express delivery <br />
                                                <small class="text-muted">3-4 days via Fedex</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <!-- Post Office Option -->
                                    <div class="form-check h-100 border rounded-3">
                                        <div class="p-3">
                                            <input class="form-check-input" type="radio" name="shippingOption" id="postOffice" value="post" />
                                            <label class="form-check-label" for="postOffice">
                                                Post office <br />
                                                <small class="text-muted">20-30 days via post</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <!-- Self Pick-up Option -->
                                    <div class="form-check h-100 border rounded-3">
                                        <div class="p-3">
                                            <input class="form-check-input" type="radio" name="shippingOption" id="selfPickup" value="pickup" />
                                            <label class="form-check-label" for="selfPickup">
                                                Self pick-up <br />
                                                <small class="text-muted">Come to our shop</small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Guest Checkout Form -->
                    <div class="card shadow-0 border">
                        <div class="p-4">
                            <h5 class="card-title mb-3">Guest Checkout</h5>
                            <form action="{{route('admin.orders.store')}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="name" class="mb-0">Name</label>
                                        <div class="form-outline">
                                            <input type="text" id="name" name="name" placeholder="Type here" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="phone" class="mb-0">Phone</label>
                                        <div class="form-outline">
                                            <input type="tel" id="phone" name="phone" value="+88 " class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="email" class="mb-0">Email</label>
                                        <div class="form-outline">
                                            <input type="email" id="email" name="email" placeholder="example@gmail.com" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4" />
                                <div class="row">
                                    <div class="col-sm-8 mb-3">
                                        <label for="address" class="mb-0">Address</label>
                                        <div class="form-outline">
                                            <input type="text" id="address" name="address" placeholder="Type here" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label for="city" class="mb-0">City</label>
                                        <select class="form-control" id="city" name="city" required>
                                            <option value="New York">New York</option>
                                            <option value="Moscow">Moscow</option>
                                            <option value="Samarqand">Samarqand</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label for="house" class="mb-0">House</label>
                                        <div class="form-outline">
                                            <input type="text" id="house" name="house" placeholder="Type here" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-6 mb-3">
                                        <label for="postalCode" class="mb-0">Postal Code</label>
                                        <div class="form-outline">
                                            <input type="text" id="postalCode" name="postalCode" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-6 mb-3">
                                        <label for="zip" class="mb-0">Zip</label>
                                        <div class="form-outline">
                                            <input type="text" id="zip" name="zip" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="messageToSeller" class="mb-0">Message to Seller</label>
                                    <div class="form-outline">
                                        <textarea class="form-control" id="messageToSeller" name="messageToSeller" rows="2"></textarea>
                                    </div>
                                </div>
                                <hr />
                                <!-- Payment Options -->
                                <h4 class="mb-3">Payment</h4>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery" value="cash_on_delivery" />
                                    <label class="form-check-label" for="cashOnDelivery">
                                        <img src="{{asset("asset/images/c2.png")}}" alt="Cash on Delivery" height="30px"> Cash on delivery
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" value="credit_card" />
                                    <p>Credit card / Debit card</p>
                                    <label class="form-check-label" for="creditCard">
                                        <i class="fa-regular fa-credit-card text-danger fa-3x"></i>
                                        <i class="fa-solid fa-credit-card fa-3x"></i>
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="ccName">Name on Card</label>
                                        <input type="text" class="form-control" id="ccName" name="ccName" placeholder="" />
                                        <small class="text-muted">Full name as displayed on card</small>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="ccNumber">Credit Card Number</label>
                                        <input type="text" class="form-control" id="ccNumber" name="ccNumber" placeholder="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="ccExpiration">Expiration</label>
                                        <input type="text" class="form-control" id="ccExpiration" name="ccExpiration" placeholder="" />
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="ccCvv">CVV</label>
                                        <input type="text" class="form-control" id="ccCvv" name="ccCvv" placeholder="" />
                                    </div>
                                </div>
                                <hr />
                                <div class="float-end">
                                    <button class="btn btn-light border">Cancel</button>
                                    <button type="submit" class="btn btn-success shadow-0 border">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Cart Summary -->
                @php
                    $subtotal = 0;
                @endphp

                @if(!empty($carts))
                    @foreach($carts as $i => $cart)
                        @php
                            $subtotal += $cart['total'];
                        @endphp
                    @endforeach

                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Cart Summary</h4>
                                <span class="badge badge-pill badge-success">{{ count($carts) }}</span>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>Subtotal</strong>
                                        <span>{{ \App\Helper::CURRENCY_SYMBOL}}{{ number_format($subtotal, 2) }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>You Pay</strong>
                                        <span>{{ \App\Helper::CURRENCY_SYMBOL }}{{ number_format($subtotal, 2) }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </section>
@endsection





