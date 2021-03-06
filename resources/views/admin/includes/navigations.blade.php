<div class="row admin-top">
    <div class="col-md-8">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('images/pharmacy.png') }}" /></a>
        </div>
        <div class="navs">
            <ul>
                <li class="{{ $data['page'] == 'Dashboard' ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="{{ $data['page'] == 'Pharmacies' ? 'active' : '' }}"><a href="{{ route('admin.pharmacies') }}">Pharmacies</a></li>
                <li class="{{ $data['page'] == 'Verifications' ? 'active' : '' }}"><a href="{{ route('admin.verifications') }}">Verifications</a></li>
                <li class="{{ $data['page'] == 'Reports' ? 'active' : '' }}"><a href="{{ route('admin.reports') }}">Reports</a></li>
                <li class="{{ $data['page'] == 'Users' ? 'active' : '' }}"><a href="{{ route('admin.users') }}">Users</a></li>
            </ul>
        </div><!-- close div .navs -->
    </div><!-- close div .col-md9 -->
    <div class="col-md-4 user-menu">
        <div class="dropdown">
            <div class="dropdown-toggle" data-toggle="dropdown">
                <span class="fa fa-angle-down arrow-down pull-right"></span>
                <div class="image pull-right">
                    <span class="fa fa-user"></span>
                </div><!-- close div .image -->
                <span class="admin-name pull-right">Hello, {{ $user->name }}!</span>
            </div><!-- close div .dropdown-toggle -->
            <ul class="dropdown-menu pull-right" style="top:60px;">
                <li><a href="#">My Account</a></li>
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            </ul>
        </div><!-- close div .dropdown -->
    </div><!-- close div .user-menu -->
</div><!-- close div .admin-top -->