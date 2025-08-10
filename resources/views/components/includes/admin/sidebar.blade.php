<div class="navbar">
    <div class="navbar-content">
        <button id="sidebar" class="btn btn-square">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
    <a href="#" class="navbar-brand">
        <img src="{{ asset('images/admin/icon.png') }}" alt="icon" width="auto" height="30"> Admin Panel
    </a>
    <span class="navbar-text">
        <span class="version"></span>
    </span>
</div>
<div class="sidebar">
    <div class="sidebar-menu">
        <h6 class="sidebar-title">Dashboard</h6>
        <div class="sidebar-divider"></div>
        <a href="{{ route('admin.index') }}" class="sidebar-link sidebar-link-with-icon {{ request()->is('admin') ? 'active' : '' }}">
            <span class="sidebar-icon {{ request()->is('admin') ? 'bg-primary text-white' : '' }}">
                <i class="fa-solid fa-home"></i>
            </span>
            Home
        </a>
        <a href="{{ route('admin.accounts.profile') }}" class="sidebar-link sidebar-link-with-icon {{ request()->is('admin/accounts/profile') ? 'active' : '' }}">
            <span class="sidebar-icon {{ request()->is('admin/accounts/profile') ? 'bg-primary text-white' : '' }}">
                <i class="fa-solid fa-user"></i>
            </span>
            Profile
        </a>
        <a href="{{ route('logout') }}" class="sidebar-link sidebar-link-with-icon {{ request()->is('logout') ? 'active' : '' }}">
            <span class="sidebar-icon {{ request()->is('logout') ? 'bg-primary text-white' : '' }}">
                <i class="fa-solid fa-sign-out-alt"></i>
            </span>
            Logout
        </a>
        <h6 class="sidebar-title mt-20">Application</h6>
        <div class="sidebar-divider"></div>
        <a href="{{ route('admin.articles.index') }}" class="sidebar-link sidebar-link-with-icon {{ request()->is('admin/articles*') ? 'active' : '' }}">
            <span class="sidebar-icon {{ request()->is('admin/articles*') ? 'bg-primary text-white' : '' }}">
                <i class="fa-solid fa-file-lines"></i>
            </span>
            Articles
        </a>
        <h6 class="sidebar-title mt-20">Content</h6>
        <div class="sidebar-divider"></div>
        
        <h6 class="sidebar-title mt-20">External Links</h6>
        <div class="sidebar-divider"></div>
        <a href="{{ route('index') }}" class="sidebar-link sidebar-link-with-icon">
            <span class="sidebar-icon bg-danger text-white">
                <i class="fa-solid fa-globe"></i>
            </span>
            Website
        </a>
    </div>
</div>