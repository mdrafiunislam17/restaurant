@extends("admin.layouts.master")
@section("title", "Create cartItems")
@section("content")
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create cartItems</h1>
            <a href="{{ route("admin.cartItems.index") }}"
               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-eye fa-sm text-white-50"></i> cartItems index</a>
        </div>

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

        @if (session()->has("success"))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session("success") }}
            </div>
        @endif

        @if (session()->has("error"))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{ session("error") }}
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route("admin.cartItems.store") }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="customer_id" class="col-sm-3 col-form-label text-right font-weight-bold">Customer*</label>
                        <div class="col-sm-6">
                            <select class="form-control" id="customer_id" name="customer_id" required>
                                <option value="" selected disabled>Select customer</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

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
                        <label for="quantity" class="col-sm-3 col-form-label text-right font-weight-bold">Quantity *</label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}" required>
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

