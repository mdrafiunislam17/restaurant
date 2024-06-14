@php use App\Helper; @endphp
@extends("website.layouts.master")

@section("title", "Order Details")

@section("content")
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-4">
                    <!-- Order Details Card -->
                    <div class="card shadow-0 border">
                        <div class="p-4">
                            <h5 class="card-title mb-3">Order Details</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <strong>Order Status:</strong>
                                    <span>{{ $order->status }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <strong>Order Date:</strong>
                                    <span>{{ $order->created_at ? $order->created_at->format('d M Y') : 'N/A' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <strong>Total Amount:</strong>
                                    <span>{{ Helper::CURRENCY_SYMBOL }}{{ number_format($totalAmount, 2) }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Delivery Address Card -->
                    <div class="card shadow-0 border mt-4">
                        <div class="p-4">
                            <h5 class="card-title mb-3">Delivery Address</h5>
                            <ul class="list-group list-group-flush">
                                @if($order->deliveryAddress)
                                    <li class="list-group-item">
                                        <strong>Name:</strong> {{ $order->deliveryAddress->name }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Phone:</strong> {{ $order->deliveryAddress->phone }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Email:</strong> {{ $order->deliveryAddress->email }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Address:</strong> {{ $order->deliveryAddress->address }}
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Note:</strong> {{ $order->deliveryAddress->note }}
                                    </li>
                                @else
                                    <li class="list-group-item">No delivery address found.</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <!-- Payment Details Card -->
                    <div class="card shadow-0 border mt-4">
                        <div class="p-4">
                            <h5 class="card-title mb-3">Payment Details</h5>
                            <ul class="list-group list-group-flush">
                                @if($order->payment)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>Payment Method:</strong>
                                        <span>{{ $order->payment->payment_method }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <strong>Payment Status:</strong>
                                        <span>{{ $order->payment->status }}</span>
                                    </li>
                                    @if($order->payment->transaction_id)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <strong>Transaction ID:</strong>
                                            <span>{{ $order->payment->transaction_id }}</span>
                                        </li>
                                    @endif
                                @else
                                    <li class="list-group-item">No payment details found.</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Order Items Summary -->
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Order Items</h4>
                            <ul class="list-group list-group-flush">
                                @foreach($order->orderItems as $item)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>{{ $item->menu_item_name }}</strong>
                                            <br>
                                            Quantity: {{ $item->quantity }}
                                        </div>
                                        <span>{{ Helper::CURRENCY_SYMBOL }}{{ number_format($item->price, 2) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection