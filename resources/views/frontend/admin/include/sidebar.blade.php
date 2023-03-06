<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Luxauro</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ Request::is('admin-dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="mx-1 bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item {{ Request::is('category/create') || Request::is('category') || Request::is('delivory-option') || Request::is('delivory-option/create') || Request::is('shipping-type') || Request::is('shipping-type/create') || Request::is('product-type') || Request::is('product-type/create') || Request::is('product') || Request::is('product/create') || Request::is('category/*/edit') || Request::is('delivory-option/*/edit') || Request::is('shipping-type/*/edit') || Request::is('product/*/edit') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="bx bx-layout mx-1"></i>
                <div data-i18n="Layouts">Product Management</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('category/create') || Request::is('category')|| Request::is('category/*/edit') ? 'active ' : '' }} ">
                    <a href="{{ route('category.index') }}" class="menu-link">
                        <div data-i18n="Without menu">All Category</div>
                    </a>
                </li>
                <li class="menu-item {{  Request::is('delivory-option') || Request::is('delivory-option/create') || Request::is('delivory-option/*/edit') ? 'active': '' }}">
                    <a href="{{ route('delivory-option.index') }}" class="menu-link">
                        <div data-i18n="Without navbar">All Delivory Option</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('shipping-type') || Request::is('shipping-type/create') || Request::is('shipping-type/*/edit') ? 'active': '' }}">
                    <a href="{{ route('shipping-type.index') }}" class="menu-link">
                        <div data-i18n="Container">All Shipping Type</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('product-type') || Request::is('product-type/create') ? 'active' : '' }}">
                    <a href="{{ route('product-type.index') }}" class="menu-link">
                        <div data-i18n="Fluid">All Product Type</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('product') || Request::is('product/create') || Request::is('product/*/edit') ? 'active': '' }}">
                    <a href="{{ route('product.index') }}" class="menu-link">
                        <div data-i18n="Blank">All Products</div>
                    </a>
                </li>
            </ul>
        </li>

         <!-- Layouts -->
         <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="bx bx-layout mx-1"></i>
                <div data-i18n="Layouts">Settings</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-items">
                    <a href="{{ route('website.header') }}" class="menu-link">
                        <div data-i18n="Without menu">{{translate('Header')}}</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('website.footer', ['lang'=>  App::getLocale()] ) }}" class="menu-link">
                        <div data-i18n="Without navbar">{{translate('Footer')}}</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('shipping-type') || Request::is('shipping-type/create') || Request::is('shipping-type/*/edit') ? 'active': '' }}">
                    <a href="{{ route('website.pages', ['lang'=>  App::getLocale()] ) }}" class="menu-link">
                        <div data-i18n="Container">{{translate('Pages')}}</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('product-type') || Request::is('product-type/create') ? 'active' : '' }}">
                    <a href="{{ route('website.appearance') }}" class="menu-link">
                        <div data-i18n="Fluid">{{translate('Appearance')}}</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cards</div>
            </a>
        </li>


    </ul>
</aside>
<!-- / Menu -->
