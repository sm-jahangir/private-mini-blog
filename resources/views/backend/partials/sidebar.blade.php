<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
                
                 @if (Request::is('admin*'))
                 @can('dashboard-view')
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                 @endcan
                 @can('category-view')
                    <li class="nav-item {{ Request::is('admin/category*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Category
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.category.create')}}" class="nav-link {{ Request::is('admin/category/create') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.category.index') }}" class="nav-link {{ Request::is('admin/category') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Category</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                 @endcan
                 @can('tag-view')
                    <li class="nav-item {{ Request::is('admin/tag*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::is('admin/tag*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Tag
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.tag.create')}}" class="nav-link {{ Request::is('admin/tag/create') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.tag.index') }}" class="nav-link {{ Request::is('admin/tag') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Tags</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                 @endcan
                 @can('post-view')
                    <li class="nav-item {{ Request::is('admin/post*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Post
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.post.create')}}" class="nav-link {{ Request::is('admin/post/create') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.post.index') }}" class="nav-link {{ Request::is('admin/post') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Post</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                 @endcan
                 @can('page-view')
                    <li class="nav-item {{ Request::is('admin/page*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::is('admin/page*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Page
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('admin.page.create')}}" class="nav-link {{ Request::is('admin/page/create') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add New</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.page.index') }}" class="nav-link {{ Request::is('admin/page') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Page</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                 @endcan
                 @can('page-view')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                Appearance
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Theme</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.social.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Social Link</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.newsletter') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Newsletter</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                 @endcan
                    <li class="nav-item">
                        <a href="{{route('admin.blank')}}" class="nav-link {{ Request::is('admin/blank') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Blank Page
                            </p>
                        </a>
                    </li>
                    <li class="nav-header">Settings</li>
                    @can('admin-view')
                        <li class="nav-item {{ Request::is('admin/role*') || Request::is('admin/user*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('admin/role*') || Request::is('admin/user*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    User Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.user.create')}}" class="nav-link {{ Request::is('admin/user/create') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            User Add
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <a href="{{route('admin.user.index')}}" class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            User List
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    @can('role-view')
                                        <a href="{{route('admin.role.create')}}" class="nav-link {{ Request::is('admin/role/create') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Role Add
                                                <i class="fas fa-angle-left right"></i>
                                            </p>
                                        </a>
                                        <a href="{{route('admin.role.index')}}" class="nav-link {{ Request::is('admin/role') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Role List
                                                <i class="fas fa-angle-left right"></i>
                                            </p>
                                        </a>
                                    @endcan
                                </li>
                            </ul>
                        </li>
                    @endcan
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
