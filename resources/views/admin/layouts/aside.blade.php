<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <li>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('Admin.dashboard.index') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <h6 class="sidebar-brand-text mx-3 mt-2 font-weight-bold" title="Khulna Divisional Association of Buffalo New York">restaurant</h6>
        </a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  {{ request()->routeIs('Admin.dashboard.index') ? 'active' : '' }} ">

        <a class="nav-link" href="{{ route('Admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>



{{--    <li class="nav-item {{--}}
{{--    request()->routeIs('Admin.restaurant.index') ||--}}
{{--    request()->routeIs('Admin.restaurant.create') ||--}}
{{--    request()->routeIs('Admin.restaurant.show') ||--}}
{{--    request()->routeIs('Admin.restaurant.edit')--}}
{{--    ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{{ route('Admin.restaurant.index') }}">--}}
{{--            <i class="fa-solid fa-utensils"></i>--}}
{{--            <span>Restaurant</span>--}}
{{--        </a>--}}
{{--    </li>--}}

    <li class="nav-item {{
    request()->routeIs('Admin.categories.index') ||
    request()->routeIs('Admin.categories.create') ||
    request()->routeIs('Admin.categories.show') ||
    request()->routeIs('Admin.categories.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('Admin.categories.index') }}">
            <i class="fa-solid fa-layer-group"></i>
            <span>Category</span>
        </a>
    </li>



    <li class="nav-item {{
    request()->routeIs('Admin.menuItems.index') ||
    request()->routeIs('Admin.menuItems.create') ||
    request()->routeIs('Admin.menuItems.show') ||
    request()->routeIs('Admin.menuItems.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('Admin.menuItems.index') }}">
            <i class="fa-solid fa-sitemap"></i>
            <span>MenuItems</span>
        </a>
    </li>



{{--    <li class="nav-item {{--}}
{{--    request()->routeIs('Admin.customers.index') ||--}}
{{--    request()->routeIs('Admin.customers.create') ||--}}
{{--    request()->routeIs('Admin.customers.show') ||--}}
{{--    request()->routeIs('Admin.customers.edit')--}}
{{--    ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{{ route('Admin.customers.index') }}">--}}
{{--            <i class="fa-solid fa-person-military-pointing"></i>--}}
{{--            <span>customers</span>--}}
{{--        </a>--}}
{{--    </li>--}}



{{--    <li class="nav-item {{--}}
{{--    request()->routeIs('Admin.orders.index') ||--}}
{{--    request()->routeIs('Admin.orders.create') ||--}}
{{--    request()->routeIs('Admin.orders.show') ||--}}
{{--    request()->routeIs('Admin.orders.edit')--}}
{{--    ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{{ route('Admin.orders.index') }}">--}}
{{--            <i class="fa-brands fa-first-order-alt"></i>--}}
{{--            <span>orders</span>--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    <li class="nav-item {{--}}
{{--    request()->routeIs('Admin.orderItems.index') ||--}}
{{--    request()->routeIs('Admin.orderItems.create') ||--}}
{{--    request()->routeIs('Admin.orderItems.show') ||--}}
{{--    request()->routeIs('Admin.orderItems.edit')--}}
{{--    ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{{ route('Admin.orderItems.index') }}">--}}
{{--            <i class="fa-solid fa-arrow-down-short-wide"></i>--}}
{{--            <span>orderItems</span>--}}
{{--        </a>--}}
{{--    </li>--}}


{{--    <li class="nav-item {{--}}
{{--    request()->routeIs('Admin.cartItems.index') ||--}}
{{--    request()->routeIs('Admin.cartItems.create') ||--}}
{{--    request()->routeIs('Admin.cartItems.show') ||--}}
{{--    request()->routeIs('Admin.cartItems.edit')--}}
{{--    ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{{ route('Admin.cartItems.index') }}">--}}
{{--            <i class="fa-solid fa-cart-shopping"></i>--}}
{{--            <span>cartItems</span>--}}
{{--        </a>--}}
{{--    </li>--}}



</ul>
