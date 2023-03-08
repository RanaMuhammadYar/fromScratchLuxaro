@extends('frontend.admin.layouts.app')
@section('title')
    <title>All Product</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header d-flux">
                    <h5 class="d-inline">All Product</h5>
                </div>
                <div class="table text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>QTY</th>
                                <th>payment type</th>
                                <th>payment status</th>
                                <th>shipping charge</th>
                                <th>total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($orders as $order)
                                <tr>
                                    <td>
                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $order->user->userDetails->name }}</strong>
                                    </td>
                                    <td></td>
                                    <td>{{ $order->payment_type }}</td>
                                    <td>{{ $order->payment_status }}</td>
                                    <td>${{ $order->shipping_charge }}</td>
                                    <td>${{ $order->over_all_total  }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href=""><i
                                                        class="bx bx-edit-alt me-1 text-success"></i> Edit</a>
                                                <a class="dropdown-item" href=""><i class="bx bx-trash me-1 text-danger"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
        </div>
    </div>
@endsection
