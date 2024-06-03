@extends("Admin.layouts.master")
@section("title", "View OrderItem")
@section("content")
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View OrderItem</h1>
            <a href="{{ route('Admin.orderItems.index') }}"
               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to OrderItems</a>
        </div>

        <!-- OrderItem Details -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group row">
                    <label for="order_id" class="col-sm-3 col-form-label text-right font-weight-bold">Order ID</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="order_id" name="order_id" value="{{ $orderItem->order_id }}" step="0.01" disabled>

                    </div>
                </div>

                <div class="form-group row">
                    <label for="menu_item_id" class="col-sm-3 col-form-label text-right font-weight-bold">Menu Item *</label>
                    <div class="col-sm-6">
                        <select class="form-control" id="menu_item_id" name="menu_item_id" disabled>
                            <option value="" selected disabled>Select Menu Item</option>
                            @foreach ($menuItems as $menuItem)
                                <option value="{{ $menuItem->id }}" {{ $orderItem->menu_item_id == $menuItem->id ? 'selected' : '' }}>{{ $menuItem->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="quantity" class="col-sm-3 col-form-label text-right font-weight-bold">Quantity</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{  $orderItem->quantity}}" step="0.01" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-sm-3 col-form-label text-right font-weight-bold">Price</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="price" name="price" value="{{ $orderItem->price}}" step="0.01" disabled>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
