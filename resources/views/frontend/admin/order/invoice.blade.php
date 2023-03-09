@extends('frontend.admin.layouts.app')
@section('title')
    <title>invoice</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <h2 class="font-weight-bold text-primary">INVOICE</h2>
                    <div>
                        <h5 class="mb-1">Hi <strong> {{ $order->user->userDetails->name }} </strong>,</h5> This is the
                        receipt for a payment of
                        <strong>${{ $order->over_all_total }}</strong> (USD) for your works
                    </div>
                    <div class="card-body ps-0 pe-0">
                        <div class="row">
                            <div class="col-sm-6"> <span>Payment No.</span><br><strong>INV23456-234</strong> </div>
                            <div class="col-sm-6 text-end"> <span>Payment Date</span><br><strong>{{ date('d-M-Y h:i a') }}
                                </strong> </div>
                        </div>
                    </div>
                    @php
                        $i = 1;
                        $allproducts = json_decode($order->cart_id);
                    @endphp
                    <div class="dropdown-divider"></div>
                    @foreach ($allproducts as $allproduct)
                        @php
                            $orders = App\Models\Admin\Cart::with('product')
                                ->where('id', $allproduct)
                                ->first();
                        @endphp
                        <div class="row pt-4">
                            <div class="col-lg-6 ">
                                <p class="h5 font-weight-bold">Bill From</p>
                                <address> Street Address: {{ $orders->product->user->userDetails->address }}<br>State , City:
                                    {{ $orders->product->user->userDetails->state->name }} , {{ $orders->product->user->userDetails->city->name }}<br>Postal Code:
                                    {{ $orders->product->user->zip_code }} <br>{{ $orders->product->user->email }}
                                </address>
                            </div>
                            <div class="col-lg-6 text-end">
                                <p class="h5 font-weight-bold">Bill To</p>
                                <address>
                                    Street Address: {{ $order->user->userDetails->address }}
                                    <br>State  City: {{ $order->user->userDetails->state->name }} , {{ $order->user->userDetails->city->name }}
                                    <br>Postal Code : {{ $order->user->zip_code }}
                                     <br>
                                    {{ $order->user->email }}
                                    <br>
                                </address>
                            </div>
                        </div>
                    @break
                @endforeach
                <div class="table-responsive push">
                    <table class="table table-bordered table-hover text-nowrap">
                        <tbody>
                            <tr class=" ">
                                <th class="text-center " style="width: 1%"></th>
                                <th>Product</th>
                                <th class="text-center" style="width: 1%">Qnty</th>
                                <th class="text-end" style="width: 1%">Unit Price</th>
                                <th class="text-end" style="width: 1%">Amount</th>
                            </tr>
                            @php
                                $i = 1;
                                $allproducts = json_decode($order->cart_id);
                            @endphp
                            @foreach ($allproducts as $allproduct)
                                <tr>
                                    {{-- {{ dd($allproduct); }} --}}
                                    @php
                                        $orders = App\Models\Admin\Cart::with('product')
                                            ->where('id', $allproduct)
                                            ->first();
                                        // {{ dd($order) }}
                                    @endphp
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>
                                        <p class="font-weight-semibold mb-1">
                                            {{ isset($orders->product->product_name) ? $orders->product->product_name : '' }}
                                        </p>
                                        {{-- <div class="text-muted">Logo and business cards design</div> --}}
                                    </td>
                                    <td class="text-center">{{ isset($orders->quantity) ? $orders->quantity : '' }}
                                    </td>
                                    <td class="text-end">
                                        ${{ isset($orders->product->product_price) ? $orders->product->product_price : '' }}
                                    </td>
                                    <td class="text-end">
                                        ${{ isset($orders->product->product_price) ? $orders->product->product_price * $orders->quantity : '' }}
                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="4" class="font-weight-semibold text-end">Subtotal</td>
                                <td class="text-end">${{ $order->over_all_total }}</td>
                            </tr>
                            {{-- <tr>
                                <td colspan="4" class="font-weight-semibold text-end">Vat Rate</td>
                                <td class="text-end">20%</td>
                            </tr> --}}
                            <tr>
                                <td colspan="4" class="font-weight-semibold text-end">Shiping Charges</td>
                                <td class="text-end">${{ $order->shipping_charge }}</td>
                            </tr>
                            <tr class="text-danger">
                                <td colspan="4" class="font-weight-bold text-danger text-uppercase text-end h4 mb-0">
                                    Total Due </td>
                                <td class="font-weight-bold text-danger text-end h4 mb-0">
                                    ${{ $order->over_all_total + $order->shipping_charge }}</td>
                            </tr>
                            {{-- <tr>
                                <td colspan="5" class="text-end"> <button type="button" class="btn btn-primary"
                                        onclick="javascript:window.print();"><i class="si si-wallet"></i> Pay
                                        Invoice</button> <button type="button" class="btn btn-success"
                                        onclick="javascript:window.print();"><i class="si si-paper-plane"></i> Send
                                        Invoice</button> <button type="button" class="btn btn-secondary"
                                        onclick="javascript:window.print();"><i class="si si-printer"></i> Print
                                        Invoice</button> </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to
                    working with you again!</p>
            </div>
        </div>
    </div>
</div>
@endsection
