<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <li>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard.index') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <h6 class="sidebar-brand-text mx-3 mt-2 font-weight-bold" title="Khulna Divisional Association of Buffalo New York">restaurant</h6>
        </a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  {{ request()->routeIs('admin.dashboard.index') ? 'active' : '' }} ">

        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>



    <li class="nav-item {{
    request()->routeIs('admin.restaurant.index') ||
    request()->routeIs('admin.restaurant.create') ||
    request()->routeIs('admin.restaurant.show') ||
    request()->routeIs('admin.restaurant.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.restaurant.index') }}">
            <i class="fa-solid fa-utensils"></i>
            <span>Restaurant</span>
        </a>
    </li>

    <li class="nav-item {{
    request()->routeIs('admin.categories.index') ||
    request()->routeIs('admin.categories.create') ||
    request()->routeIs('admin.categories.show') ||
    request()->routeIs('admin.categories.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
            <i class="fa-solid fa-layer-group"></i>
            <span>Category</span>
        </a>
    </li>



    <li class="nav-item {{
    request()->routeIs('admin.menuItems.index') ||
    request()->routeIs('admin.menuItems.create') ||
    request()->routeIs('admin.menuItems.show') ||
    request()->routeIs('admin.menuItems.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.menuItems.index') }}">
            <i class="fa-solid fa-sitemap"></i>
            <span>menuItems</span>
        </a>
    </li>



    <li class="nav-item {{
    request()->routeIs('admin.customers.index') ||
    request()->routeIs('admin.customers.create') ||
    request()->routeIs('admin.customers.show') ||
    request()->routeIs('admin.customers.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.customers.index') }}">
            <i class="fa-solid fa-person-military-pointing"></i>
            <span>customers</span>
        </a>
    </li>



    <li class="nav-item {{
    request()->routeIs('admin.orders.index') ||
    request()->routeIs('admin.orders.create') ||
    request()->routeIs('admin.orders.show') ||
    request()->routeIs('admin.orders.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.orders.index') }}">
            <i class="fa-brands fa-first-order-alt"></i>
            <span>orders</span>
        </a>
    </li>

    <li class="nav-item {{
    request()->routeIs('admin.orderItems.index') ||
    request()->routeIs('admin.orderItems.create') ||
    request()->routeIs('admin.orderItems.show') ||
    request()->routeIs('admin.orderItems.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.orderItems.index') }}">
            <i class="fa-solid fa-arrow-down-short-wide"></i>
            <span>orderItems</span>
        </a>
    </li>


    <li class="nav-item {{
    request()->routeIs('admin.cartItems.index') ||
    request()->routeIs('admin.cartItems.create') ||
    request()->routeIs('admin.cartItems.show') ||
    request()->routeIs('admin.cartItems.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.cartItems.index') }}">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>cartItems</span>
        </a>
    </li>



</ul>
