@extends('frontend.vendor.layouts.app')
@section('title')
    <title>All Orders</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header d-flux">
                    <h5 class="d-inline">All Orders</h5>
                </div>
                <div class="table text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>payment type</th>
                                <th>payment status</th>
                                <th>total</th>
                                <th>INVOICE</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @php
                                $total = 0;
                                $shiping = 0;
                            @endphp
                            @foreach ($orders as $order)
                                @php
                                    session()->put('order_id', $order->id);
                                    $firstTime = true;
                                @endphp
                                @foreach ($order->cart as $cart)
                                    @if ($cart->cart->product->user_id == auth()->user()->id)
                                        @if ($firstTime)
                                            <tr>
                                                <td>
                                                    <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ isset($cart->cart->product->user->userDetails->name) ? $cart->cart->product->user->userDetails->name : '' }}</strong>
                                                </td>
                                                <td>{{ $order->payment_type }}</td>
                                                <td>{{ $order->payment_status }}</td>
                                                <td>${{ $total = $cart->cart->quantity * $cart->cart->product->product_price }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('vendororder.invoice', $order->id) }}">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>

                                            @php
                                                $firstTime = false;
                                            @endphp
                                        @else
                                            @if ($order->id !== session()->get('order_id'))
                                                <tr>
                                                    <td>
                                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                        <strong>{{ isset($cart->cart->product->user->userDetails->name) ? $cart->cart->product->user->userDetails->name : '' }}</strong>
                                                    </td>
                                                    <td>{{ $order->payment_type }}</td>
                                                    <td>{{ $order->payment_status }}</td>
                                                    <td>${{ $total = $cart->cart->quantity * $cart->cart->product->product_price }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('vendororder.invoice', $order->id) }}">
                                                            <i class="bi bi-eye"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @else
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>${{ $total += $cart->cart->quantity * $cart->cart->product->product_price }}
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                            @endif
                                        @endif
                                    @endif
                                @endforeach
                                @php
                                    session()->forget('order_id');
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
@endsection
