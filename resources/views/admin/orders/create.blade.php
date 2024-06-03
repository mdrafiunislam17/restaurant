@extends("Admin.layouts.master")
@section("title", "Create orders")
@section("content")
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create orders</h1>
            <a href="{{ route("Admin.orders.index") }}"
               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-eye fa-sm text-white-50"></i> Orders Index</a>
        </div>

        <!-- Display Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Success Message -->
        @if (session()->has("success"))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session("success") }}
            </div>
        @endif

        <!-- Error Message -->
        @if (session()->has("error"))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session("error") }}
            </div>
        @endif

        <!-- Order Form -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route("Admin.orders.store") }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label text-right font-weight-bold">Name *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" value="{{ old("name") }}"
                                   name="name"
                                   autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label text-right font-weight-bold">Email *</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" value="{{ old("email") }}"
                                   name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label text-right font-weight-bold">Password *</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" value="{{ old("password") }}"
                                   name="password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="contact_info" class="col-sm-3 col-form-label text-right font-weight-bold">Contact Info *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="contact_info" value="{{ old("contact_info") }}"
                                   name="contact_info">
                        </div>
                    </div>

                    <hr>
                    <div class="form-group row">
                        <label for="menu_item_id" class="col-sm-3 col-form-label text-right font-weight-bold">Menu Item *</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="menu_item_id" name="menu_item_id" required>
                                <option value="" selected disabled>Select Menu Item</option>
                                @foreach ($menuItems as $menuItem)
                                    <option value="{{ $menuItem->id }}">{{ $menuItem->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-3 col-form-label text-right font-weight-bold">Price *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="quantity" class="col-sm-3 col-form-label text-right font-weight-bold">Quantity *</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="total_amount" class="col-sm-3 col-form-label text-right font-weight-bold">Total Amount *</label>
                        <div class="col-sm-6">
                            <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount" value="{{ old('total_amount') }}" required readonly>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row">
                        <label for="order_date" class="col-sm-3 col-form-label text-right font-weight-bold">Order Date *</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="order_date" name="order_date" value="{{ old('order_date') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="delivery_address" class="col-sm-3 col-form-label text-right font-weight-bold">Delivery Address *</label>
                        <div class="col-sm-6">
                            <textarea name="delivery_address" id="delivery_address" class="form-control" required>{{ old('delivery_address') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pickup_time" class="col-sm-3 col-form-label text-right font-weight-bold">Pickup Time *</label>
                        <div class="col-sm-6">
                            <input type="time" class="form-control" id="pickup_time" name="pickup_time" value="{{ old('pickup_time') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label text-right font-weight-bold">Status</label>
                        <div class="col-sm-6">
                            <select name="status" id="status" class="form-control">
                                <option value="pending" {{ old('status', 'pending') == 'pending' ? 'selected' : '' }}>pending</option>
                                <option value="confirm" {{ old('status') == 'confirm' ? 'selected' : '' }}>confirm</option>
                                <option value="processing" {{ old('status') == 'processing' ? 'selected' : '' }}>processing</option>
                                <option value="complete" {{ old('status') == 'complete' ? 'selected' : '' }}>complete</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group row">
                        <div class="offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push("scripts")
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#menu_item_id').change(function() {
                var menuItemId = $(this).val();
                if (menuItemId) {
                    $.ajax({
                        url: '{{ route("Admin.get.menu.item.price") }}',
                        type: 'GET',
                        data: { id: menuItemId },
                        success: function(response) {
                            $('#price').val(response.price);
                            calculateTotal();
                        },
                        error: function() {
                            alert('Error fetching price');
                        }
                    });
                } else {
                    $('#price').val('');
                }
            });

            $('#quantity').on('input', function() {
                calculateTotal()
            });

            function calculateTotal() {
                var price = parseFloat($('#price').val());
                var quantity = parseInt($('#quantity').val());
                if (!isNaN(price) && !isNaN(quantity)) {
                    $('#total_amount').val(price * quantity);
                }
            }
        });
    </script>
@endpush
