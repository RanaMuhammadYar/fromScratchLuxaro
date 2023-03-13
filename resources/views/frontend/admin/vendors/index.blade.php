@extends('frontend.admin.layouts.app')
@section('title')
    <title>All Vendors</title>
@endsection
@section('content')
    <style>
        .suspended {
            border: none;
            background: none;
            cursor: pointer;
        }

        .active {
            border: none;
            background: none;
            cursor: pointer;
        }
    </style>
    <div class="row">
        <div class="col-12">
            <!-- Basic Bootstrap Table -->
            <div class="card">
                <div class="card-header d-flux">
                    <h5 class="d-inline">All Vendors</h5>
                </div>
                <div class="table text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Shop Name</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($pendingVendors as $pendingVendor)
                                <tr>
                                    <td>
                                        <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong> {{ $pendingVendor->email }}</strong>
                                    </td>
                                    <td>{{ $pendingVendor->shop_name }}</td>
                                    <td>
                                        @if ($pendingVendor->status == 'Active')
                                            <span class="badge rounded-pill bg-success">{{ $pendingVendor->status }}</span><br>
                                        @else
                                            <span class="badge rounded-pill bg-danger">{{ $pendingVendor->status }}</span><br>
                                        @endif
                                        @if ($pendingVendor->status == 'Active')
                                            <a  href="{{ route('admin.adminactiveVendor',$pendingVendor->id) }}" class="active" value="Active">
                                                <i class="bi bi-toggle-on text-success display-5"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('admin.suspendedVendor',$pendingVendor->id) }}" class="suspended"
                                                value="Suspended">
                                                <i class="bi bi-toggle-off text-danger display-5"></i>
                                            </a>
                                        @endif
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
