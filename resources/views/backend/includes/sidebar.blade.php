<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('menus.backend.sidebar.dashboard') }}</span>
                </a>
            </li>

        <!-- Sidebar Menu -->

        <ul class="sidebar-menu">
            @include('backend.includes.menu')
        </ul>
        <!-- /.sidebar-menu -->
           

            <li class="header">{{ trans('menus.backend.sidebar.system') }}</li>
            
            @permissions(['manage-users', 'manage-roles'])
                <li class="{{ Active::pattern('admin/access/*') }} treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>{{ trans('menus.backend.access.title') }}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>

                    <ul class="treeview-menu {{ Active::pattern('admin/access/*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/access/*', 'display: block;') }}">
                        @permission('manage-users')
                            <li class="{{ Active::pattern('admin/access/user*') }}">
                                <a href="{{ route('admin.access.user.index') }}">
                                    <i class="fa fa-circle-o"></i>
                                    <span>{{ trans('labels.backend.access.users.management') }}</span>
                                </a>
                            </li>
                        @endauth

                        @permission('manage-roles')
                            <li class="{{ Active::pattern('admin/access/role*') }}">
                                <a href="{{ route('admin.access.role.index') }}">
                                    <i class="fa fa-circle-o"></i>
                                    <span>{{ trans('labels.backend.access.roles.management') }}</span>
                                </a>
                            </li>
                        @endauth
                    </ul>
                </li>
            @endauth
           
            @permission('manage-logs')
            <li class="{{ Active::pattern('admin/log-viewer*') }} treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>{{ trans('menus.backend.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/log-viewer') }}">
                        <a href="{{ route('admin.log-viewer::dashboard') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.dashboard') }}</span>
                        </a>
                    </li>

                    <li class="{{ Active::pattern('admin/log-viewer/logs') }}">
                        <a href="{{ route('admin.log-viewer::logs.list') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.logs') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
            @endauth
        </ul><!-- /.sidebar-menu -->
    </section><!-- /.sidebar -->
</aside>
