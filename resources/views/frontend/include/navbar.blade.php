<header id="header">
    <div class="logos-header py-2">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                @if (strpos(url()->current(), 'goldEvine'))
                    <a class="logo-gold" href="{{ route('home') }}"><img src="{{ static_asset('images/logo.png') }}"
                            class="img-fluid"></a>
                    <a class="logo" href="{{ route('goldEvine') }}"><img
                            src="{{ static_asset('images/GoldEvine-logo.png') }}" class="img-fluid"></a>
                    <a class="logo-gold" href="{{ route('goldMetal') }}"><img
                            src="{{ static_asset('images/Gold-Metal-logo.png') }}" class="img-fluid"></a>
                @elseif(strpos(url()->current(), 'goldMetal'))
                    <a class="logo-gold" href="{{ route('home') }}"><img src="{{ static_asset('images/logo.png') }}"
                            class="img-fluid"></a>
                    <a class="logo" href="{{ route('goldMetal') }}"><img
                            src="{{ static_asset('images/Gold-Metal-logo.png') }}" class="img-fluid"></a>
                    <a class="logo-gold" href="{{ route('goldEvine') }}"><img
                            src="{{ static_asset('images/GoldEvine-logo.png') }}" class="img-fluid"></a>
                @else
                    <a class="logo-gold" href="{{ route('goldEvine') }}"><img
                            src="{{ static_asset('images/GoldEvine-logo.png') }}" class="img-fluid"></a>
                    <a class="logo" href="{{ route('home') }}"><img src="{{ static_asset('images/logo.png') }}"
                            class="img-fluid"></a>
                    <a class="logo-gold" href="{{ route('goldMetal') }}"><img
                            src="{{ static_asset('images/Gold-Metal-logo.png') }}" class="img-fluid"></a>
                @endif
            </div>
        </div>
    </div>
    <div class="nav-section border-top">
        <div class="container-fluid p-0">
            <div class="header-row d-flex justify-content-between align-items-center">
                <button class="menu-btn d-md-none background-none border-0 ms-3 bg-transparent"><i
                        class="fa fa-bars text-white"></i></button>
                <div class="header-info d-flex justify-content-between align-items-center px-3">
                    <div class="search dro">
                        <a class="dropdown-toggle1" href="javascript:void" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-search"></i></a>
                        <div class="dropdown-menu border-top" aria-labelledby="dropdownMenuButton1">
                            <form
                                action="{{ Request::is('goldEvines') || Request::is('project-search') ? route('projectsearch') : route('productsearch') }}"
                                method="post" class="d-flex mx-3 border rounded bg-white">
                                @csrf
                                <input type="search" name="search"
                                    placeholder="{{ Request::is('goldEvines') || Request::is('project-search') ? ' Project Search... ' : 'Product Search...' }}"
                                    class="border-0 flex-fill">
                                <button type="submit" class="border"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    @auth
                        <div class="user-info">
                            <a href="javascript:void" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i
                                    class="fa fa-chevron-down me-2"></i>{{ isset(auth()->user()->userDetails) ? auth()->user()->userDetails->name : '' }}
                                <img src="{{ isset(auth()->user()->userDetails->user_profile_image) ? auth()->user()->userDetails->user_profile_image : '' }}"
                                    onerror="this.src='{{ asset('images/avatar.png') }}'" class="mt-2" alt=""
                                    style="border-radius: 50%" width="25px:">
                                {{-- <i class="fa fa-user-circle ms-1"
                                    aria-hidden="true"></i> --}}
                            </a>
                            <div class="dropdown-menu p-4 border-top" id="dropdown" aria-labelledby="dropdownMenuButton2">
                                <div class="row">
                                    <div class="col-6">
                                        <ul class="list-unstyled m-0 p-0">
                                            <li>
                                                <a href="{{ route('myaccount') }}">
                                                    My Account
                                                    |
                                                </a>
                                                <a href="{{ route('myprofile') }}">
                                                    My Profile
                                                </a>
                                            </li>

                                            <li> <a href="#" class="openGoldEvineSidebar">Goldevine:</a> <i
                                                    class="fa fa-lock"></i> <i class="fa fa-heart"></i></li>
                                            <li>My Compaigns | Dashboard</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-unstyled m-0 p-0">
                                            <li> <a href="#" class="openLuxaroSidebar">Luxauro:</a> <i
                                                    class="fa fa-lock"></i> <i class="fa fa-heart"></i></li>
                                            <li>My Purchase | My Seller Files</li>
                                            <li> <a href="#" class="openGMGSidebar">Gold Metal Guild:</a> <i
                                                    class="fa fa-comment"></i> <i class="fa fa-user"></i></li>
                                        </ul>

                                        <ul>
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="user-info">

                            <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                                <a href="{{ route('login') }}"
                                    class="text-white d-inline-block opacity-60 py-2">Login</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('register') }}"
                                    class="text-white d-inline-block opacity-60 py-2">Registration</a>
                            </li>

                        </div>
                    @endauth
                    <ul class="list-unstyled text-uppercase d-flex m-0 p-0">
                        <li class="ms-3 d-none"><a href="javascript:void">login</a></li>
                        <li class="ms-3 d-none"><a href="javascript:void">register</a></li>
                        <li class="ms-3 cart-icon user-info">
                            <a href="#" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-shopping-cart"aria-hidden="true">
                                    <span class="CartCount">
                                        @php
                                            if (Auth::check()) {
                                                $cartorders = \App\Models\Admin\Cart::with('product')
                                                    ->where(function ($query) {
                                                        $query
                                                            ->where('status', 'pending')
                                                            ->where('user_id', Auth::id())
                                                            ->where('temp_id', '!=', null)
                                                            ->orWhere(function ($query) {
                                                                $query->where('status', 'pending')->where('temp_id', session()->get('temp_id'));
                                                            });
                                                    })
                                                    ->count();
                                                echo $cartorders;
                                            } else {
                                                $cartorders = \App\Models\Admin\Cart::with('product')
                                                    ->where(function ($query) {
                                                        $query
                                                            ->where('status', 'pending')
                                                            ->where('user_id', Auth::id())
                                                            ->orWhere(function ($query) {
                                                                $query->where('status', 'pending')->where('temp_id', session()->get('temp_id'));
                                                            });
                                                    })
                                                    ->count();
                                                echo $cartorders;
                                            }
                                        @endphp
                                    </span>
                                </i>
                            </a>
                            <div class="dropdown-menu p-4 border-top" aria-labelledby="dropdownMenuButton3"
                                style="color: rgb(213, 207, 207)">
                                <div class="luxauro-cart mb-2">
                                    <h3 class="border-bottom d-inline-block mb-1">Luxauro</h3>
                                    <div class="catdata">
                                        @php
                                            if (Auth::check()) {
                                                $cartorders = \App\Models\Admin\Cart::with('product')
                                                    ->where(function ($query) {
                                                        $query
                                                            ->where('status', 'pending')
                                                            ->where('user_id', Auth::id())
                                                            ->orWhere(function ($query) {
                                                                $query->where('status', 'pending')->where('temp_id', session()->get('temp_id'));
                                                            });
                                                    })
                                                    ->get();
                                            } else {
                                                $cartorders = \App\Models\Admin\Cart::with('product')
                                                    ->where(function ($query) {
                                                        $query
                                                            ->where('status', 'pending')
                                                            ->where('user_id', Auth::id())
                                                            ->orWhere(function ($query) {
                                                                $query->where('status', 'pending')->where('temp_id', session()->get('temp_id'));
                                                            });
                                                    })
                                                    ->get();
                                            }
                                        @endphp
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($cartorders as $cartorder)
                                            <div class="row destroy{{ $cartorder->id }}">
                                                <div class="col-5 px-1">
                                                    <span class="mx-2"><i
                                                            class="fa fa-shopping-cart"aria-hidden="true"></i></span><span>

                                                        {{ $cartorder->product->product_name }}

                                                    </span>
                                                </div>
                                                <div class="col-1 px-1">
                                                    <span> <i class="fa fa-times"aria-hidden="true"
                                                            onclick="orderdestroy({{ $cartorder->id }})"
                                                            style="cursor: pointer;"></i></span>
                                                </div>
                                                <div class="col-3 px-1">
                                                    <span>{{ $cartorder->quantity }}</span>
                                                </div>
                                                <div class="col-3 px-1 ">
                                                    <span
                                                        class="d-block">=${{ $cartorder->quantity * $cartorder->product->product_price }}
                                                    </span>
                                                </div>
                                            </div>
                                            @if ($cartorder->quantity * $cartorder->product->product_price == !null)
                                                @php

                                                    $total = $total + $cartorder->quantity * $cartorder->product->product_price;
                                                @endphp
                                            @else
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="totalprice">
                                        <div class="row px-1">
                                            <div class="col-8"></div>
                                            <div class="col-3">
                                                <span class="mx-1">
                                                    @if ($total == !null)
                                                        Total=${{ $total }}
                                                    @else
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="col-1"></div>
                                        </div>
                                    </div>

                                    {{-- <div class="cart-fav mb-0">
                                        <span class="me-2"><i class="fa fa-heart"
                                                aria-hidden="true"></i></span><span>Favorites </span>
                                    </div>
                                    <div class="cart-fav">
                                        <span class="me-2"><i class="fa fa-bookmark"
                                                aria-hidden="true"></i></span><span>Save for later</span>
                                    </div> --}}

                                    <div class="row">
                                        <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                                    </div>
                                </div>
                                {{-- <div class="luxauro-cart mb-2">
                                    <h3 class="border-bottom d-inline-block mb-1">GoldEvine</h3>
                                    <div class="row">
                                        <div class="col-5 px-1">
                                            <span class="mx-2"><i
                                                    class="fa fa-shopping-cart"aria-hidden="true"></i></span><span>(items
                                                in bag)</span>
                                        </div>
                                        <div class="col-1 px-1">
                                            <span> <i class="fa fa-times"aria-hidden="true"></i></span>
                                        </div>
                                        <div class="col-3 px-1">
                                            <span>(quantity)</span>
                                        </div>
                                        <div class="col-3 px-1 ">
                                            <span class="d-block">= $</span><span>= $ Total</span>
                                        </div>
                                    </div>
                                    <div class="cart-fav mb-0">
                                        <span class="me-2"><i class="fa fa-heart"
                                                aria-hidden="true"></i></span><span>Favorites </span>
                                    </div>
                                    <div class="cart-fav">
                                        <span class="me-2"><i class="fa fa-bookmark"
                                                aria-hidden="true"></i></span><span>Save for later</span>
                                    </div>
                                </div>
                                <div class="luxauro-cart mb-2">
                                    <h3 class="border-bottom d-inline-block mb-1">gold metal guild</h3>
                                    <div class="cart-fav mb-0">
                                        <span class="me-2"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span><span>Add a FrameSpace </span>
                                    </div>
                                    <div class="cart-fav">
                                        <span class="me-2"><i class="fa fa-calendar"
                                                aria-hidden="true"></i></span><span>Scheduler</span>
                                    </div>
                                </div> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <nav id="nav" class="text-uppercase d-md-flex justify-content-between">
                <button class="menu-btn d-md-none background-none border-0 bg-transparent"><i
                        class="fa fa-times text-white"></i></button>
                <ul class="list-unstyled m-0 p-0 d-md-flex">
                    <li><a href="{{ route('allProducts') }}">products</a></li>
                    <li><a href="{{ route('goldEvine') }}">projects</a></li>
                    <li><a href="javascript:void">professionals</a></li>
                </ul>
                <ul class="list-unstyled m-0 p-0 d-md-flex justify-content-end">
                    @if (Auth::check())
                        @if (Auth::user()->role == 'Merchant')
                            <li><a href="{{ route('vendorDashboard') }}">Vendor Dashboard</a></li>
                        @elseif (Auth::user()->role == 'Admin')
                            <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                        @else
                        @endif
                    @endif
                    <li><a href="{{ route('charters') }}">charters</a></li>
                    <li><a href="{{ route('forums') }}">forums</a></li>
                    <li><a href="{{ route('suits') }}">Suits</a></li>
                </ul>

            </nav>
        </div>

</header>
