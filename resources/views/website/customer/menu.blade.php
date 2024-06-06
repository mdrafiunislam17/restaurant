<div class="list-group">
    <a href="{{ route('website.customer.dashboard') }}"
       class="list-group-item list-group-item-action {{ request()->routeIs('website.customer.dashboard') ? 'active' : '' }}">Dashboard</a>

    <a href="" class="list-group-item list-group-item-action">Orders</a>

    <a href="{{ route('website.customer.profile') }}"
       class="list-group-item list-group-item-action {{ request()->routeIs('website.customer.profile') ? 'active' : '' }}">Profile</a>

    <a href="{{ route('website.customer.password_change') }}"
       class="list-group-item list-group-item-action {{ request()->routeIs('website.customer.password_change') ? 'active' : '' }}">Password Change</a>

</div>