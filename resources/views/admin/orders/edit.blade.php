@extends("Admin.layouts.master")
@section("title", "Edit Order")
@section("content")
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Order</h1>
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
                <form action="{{ route("Admin.orders.update", $order->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="customer_id" class="col-sm-3 col-form-label text-right font-weight-bold">Customer *</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="customer_id" name="customer_id" required>
                                <option value="" selected disabled>Select Customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : '' }}>
                                        {{ $customer->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="order_date" class="col-sm-3 col-form-label text-right font-weight-bold">Order Date *</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="order_date" name="order_date" value="{{ $order->order_date ? \Carbon\Carbon::parse($order->order_date)->format('Y-m-d') : '' }}" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="total_amount" class="col-sm-3 col-form-label text-right font-weight-bold">Total Amount *</label>
                        <div class="col-sm-6">
                            <input type="number" step="0.01" class="form-control" id="total_amount" name="total_amount" value="{{ $order->total_amount }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="delivery_address" class="col-sm-3 col-form-label text-right font-weight-bold">Delivery Address *</label>
                        <div class="col-sm-6">
                            <textarea name="delivery_address" id="delivery_address" class="form-control" required>{{ $order->delivery_address }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pickup_time" class="col-sm-3 col-form-label text-right font-weight-bold">Pickup Time *</label>
                        <div class="col-sm-6">
                            <input type="time" class="form-control" id="pickup_time" name="pickup_time" value="{{ $order->pickup_time }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label text-right font-weight-bold">Status</label>
                        <div class="col-sm-6">
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ $order->status == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $order->status == '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
