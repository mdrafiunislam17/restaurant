<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <li>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <h6 class="sidebar-brand-text mx-3 mt-2 font-weight-bold" title="Khulna Divisional Association of Buffalo New York">restaurant</h6>
        </a>
    </li>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item  {{ request()->routeIs('home') ? 'active' : '' }} ">

        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
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
            <span>MenuItems</span>
        </a>
    </li>

    <li class="nav-item {{
    request()->routeIs('admin.about.index') ||
    request()->routeIs('admin.about.create') ||
    request()->routeIs('admin.about.show') ||
    request()->routeIs('admin.about.edit')
    ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.about.index') }}">
            <i class="fa-solid fa-address-card"></i>
            <span>About Us</span>
        </a>
    </li>

</ul>
