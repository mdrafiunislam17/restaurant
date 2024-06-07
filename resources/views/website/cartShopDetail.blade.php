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
                        @php $total = 0 @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                                <tr data-id="{{ $id }}" >

                                    <td class="image" data-title="No">
                                        <img src="{{ asset('storage/uploads/menuItems/' . $cartItem->menuItem->image) }}" height="70px" alt="">
                                    </td>
                                    <td class="menuItem-des" data-title="Description">
                                        <p class="menuItem-name">{{ $cartItem->menuItem->name }}</p>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <span>${{ $details['price'] * $details['quantity'] }}</span>
                                    </td>
                                    <td class="qty" data-title="Qty">
                                        <form action="{{ route('website.updateCart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="menu_item_id" value="{{ $cartItem->menu_item_id }}">
                                            <div class="input-group quantity">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-primary btn-decrement" type="button">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control text-center quantity-input" name="quantity" value="{{ $cartItem->quantity }}" />
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary btn-increment" type="button">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                    <td class="total-amount cart_single_price" data-title="Total">
                                        <span class="money">${{ number_format(($cartItem->menuItem->price - (($cartItem->menuItem->price * $cartItem->menuItem->discount) / 100)) * $cartItem->quantity, 2) }}</span>
                                    </td>
                                    <td class="action" data-title="Remove">
                                        <form action="{{ route('website.removeFromCart') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="menu_item_id" value="{{ $cartItem->menu_item_id }}">
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash text-dark"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="6" class="text-right">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        <tr>

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
                                <span>$${{ $total }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>You Pay</strong>
                                <span>$${{ $total }}</span>
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
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="additionalComments">Additional Comments</label>
                                <textarea id="additionalComments" rows="4" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="promoCode">Promo Code</label>
                                <input type="text" id="promoCode" class="form-control">
                                <button type="submit" class="btn btn-primary mt-2">Apply Code</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


        <script type="text/javascript">

            $(".cart_update").change(function (e) {
                e.preventDefault();

                var ele = $(this);

                $.ajax({
                    url: '{{ route('updateCart') }}',
                    method: "patch",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id"),
                        quantity: ele.parents("tr").find(".quantity").val()
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            });

            $(".cart_remove").click(function (e) {
                e.preventDefault();

                var ele = $(this);

                if(confirm("Do you really want to remove?")) {
                    $.ajax({
                        url: '{{ route('removeFromCart') }}',
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("data-id")
                        },
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });

        </script>
@endsection
