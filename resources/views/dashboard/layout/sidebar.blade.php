{{-- Start sidebar menues --}}
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4"
id="sidenav-main">

{{-- logo section --}}
<div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#">
        <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo" />
        <span class="ms-1 font-weight-bold">Sales Management</span>
    </a>
</div>
{{-- end logo section --}}

<hr class="horizontal dark mt-0" />

{{-- start menus section --}}
<div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">


        {{-- <li class="nav-item">
            <a class="nav-link active" href="./pages/dashboard.html">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
            </a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.analytics') }}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">All Analytics Data</span>
            </a>
        </li>

        {{-- total sales menu --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.total-sales') }}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Total Sales</span>
            </a>
        </li>

        {{-- total sellin products --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.total-selling-product') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-app text-info text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Top-Selling Products</span>
            </a>
        </li>

        {{-- sales by category --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.sales-by-category') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Sales by Category</span>
            </a>
        </li>

        {{-- revenue trends --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.revenue-trends') }}">
                <div
                class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
                <span class="nav-link-text ms-1">Revenue Trends</span>
            </a>
        </li>

        {{-- order sratus --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.order-status') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Order Status</span>
            </a>
        </li>

        {{-- customer acquisition --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.customer-acquisition') }}">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Customer Acquisition</span>
            </a>
        </li>

        {{-- start user account section --}}
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">
                Account pages
            </h6>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">{{ __('Log Out') }}</span>
            </a>
        </li>
        {{-- end user account section --}}

</div>
{{-- end menus --}}

<hr class="horizontal dark mt-0" />
<div class="sidenav-footer mx-2" style="margin-top: 100px">
    <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="./assets/img/illustrations/icon-documentation.svg" alt="sidebar_illustration" />
    </div>
    <a class="btn btn-primary btn-sm mb-0 w-100" href="#" type="button">Need Help?</a>
</div>
</aside>
{{-- end sidebar section --}}
