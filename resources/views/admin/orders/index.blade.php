@extends("Admin.layouts.master")
@section("title", "Orders")
@section("content")
    <div class="container-fluid">
        <!-- Page Heading -->


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



        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($deliveryAddresses as $deliveryAddress)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $deliveryAddress->name }}</td>
                                <td>{{ $deliveryAddress->phone }}</td>
                                <td>{{ $deliveryAddress->email }}</td>
                                <td>
                                    <a href="{{ route('admin.orders.show', $deliveryAddress->order_id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> View</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No delivery addresses found</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
