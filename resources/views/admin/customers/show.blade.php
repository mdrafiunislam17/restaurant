@extends("admin.layouts.master")
@section("title", "View customer")
@section("content")
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">View customer</h1>
            <a href="{{ route("admin.customers.index") }}"
               class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-left fa-sm text-white-50"></i> Back to customers index</a>
        </div>

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

        <!-- Customer Details -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label text-right font-weight-bold">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" value="{{ $customer->name }}"
                               name="name" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label text-right font-weight-bold">Email</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" value="{{ $customer->email }}"
                               name="name" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="contact_info" class="col-sm-3 col-form-label text-right font-weight-bold">Contact Info</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" value="{{ $customer->contact_info }}"
                               name="name" disabled>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
