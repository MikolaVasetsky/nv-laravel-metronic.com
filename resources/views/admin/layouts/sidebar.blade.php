<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>

            <li class="nav-item start {{ request()->is('admin') ? 'active open' : '' }}">
                <a href="{{route('admin')}}" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="{{ request()->is('admin') ? 'selected' : '' }}"></span>
                </a>
            </li>

            <li class="nav-item start {{ request()->is('admin/users') ? 'active open' : '' }}">
                <a href="{{route('admin.users')}}" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Users</span>
                    <span class="{{ request()->is('admin/users') ? 'selected' : '' }}"></span>
                </a>
            </li>

            <li class="nav-item start {{ request()->is('admin/posts/*') || request()->is('admin/posts') ? 'active open' : '' }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Post</span>
                    <span></span>
                    <span class="arrow {{ request()->is('admin/posts/*') || request()->is('admin/posts') ? 'open' : '' }}"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start {{ request()->is('admin/posts') ? 'active open' : '' }}">
                        <a href="{{route('admin.posts')}}" class="nav-link ">
                            <i class="icon-bar-chart"></i>
                            <span class="title">List</span>
                            <span class="{{ request()->is('admin/posts') ? 'selected' : '' }}"></span>
                        </a>
                    </li>
                    <li class="nav-item start {{ request()->is('admin/posts/create') ? 'active open' : '' }}">
                        <a href="{{route('admin.posts.create')}}" class="nav-link ">
                            <i class="icon-bulb"></i>
                            <span class="title">Create</span>
                            <span class="{{ request()->is('admin/posts/create') ? 'selected' : '' }}"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>