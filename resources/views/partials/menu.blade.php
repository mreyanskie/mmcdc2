<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('patient_access')
                <li class="nav-item">
                    <a href="{{ route("admin.patients.index") }}" class="nav-link {{ request()->is('admin/patients') || request()->is('admin/patients/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-user-circle nav-icon">

                        </i>
                        {{ trans('cruds.patient.title') }}
                    </a>
                </li>
            @endcan
            @can('appointment_access')
                <li class="nav-item">
                    <a href="{{ route("admin.appointments.index") }}" class="nav-link {{ request()->is('admin/appointments') || request()->is('admin/appointments/*') ? 'active' : '' }}">
                        <i class="fa-fw far fa-calendar-alt nav-icon">

                        </i>
                        {{ trans('cruds.appointment.title') }}
                    </a>
                </li>
            @endcan
            @can('service_access')
                <li class="nav-item">
                    <a href="{{ route("admin.services.index") }}" class="nav-link {{ request()->is('admin/services') || request()->is('admin/services/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-band-aid nav-icon">

                        </i>
                        {{ trans('cruds.service.title') }}
                    </a>
                </li>
            @endcan
            @can('employee_access')
                <li class="nav-item">
                    <a href="{{ route("admin.employees.index") }}" class="nav-link {{ request()->is('admin/employees') || request()->is('admin/employees/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-user-md nav-icon">

                        </i>
                        {{ trans('cruds.employee.title') }}
                    </a>
                </li>
            @endcan
            @can('product_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-shopping-cart nav-icon">

                        </i>
                        {{ trans('cruds.productManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('product_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.product-categories.index") }}" class="nav-link {{ request()->is('admin/product-categories') || request()->is('admin/product-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.productCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('product_tag_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.product-tags.index") }}" class="nav-link {{ request()->is('admin/product-tags') || request()->is('admin/product-tags/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-folder nav-icon">

                                    </i>
                                    {{ trans('cruds.productTag.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('product_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.products.index") }}" class="nav-link {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-shopping-cart nav-icon">

                                    </i>
                                    {{ trans('cruds.product.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            
            @can('user_alert_access')
            <li class="nav-item">
                <a href="{{ route("admin.user-alerts.index") }}" class="nav-link {{ request()->is('admin/user-alerts') || request()->is('admin/user-alerts/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-bell nav-icon">

                    </i>
                    {{ trans('cruds.userAlert.title') }}
                </a>
            </li>
            @endcan

            @php($unread = \App\QaTopic::unreadCount())
                <li class="nav-item">
                    <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is('admin/messenger') || request()->is('admin/messenger/*') ? 'active' : '' }} nav-link">
                        <i class="nav-icon fa-fw fa fa-envelope">

                        </i>
                        <span>{{ trans('global.messages') }}</span>
                        @if($unread > 0)
                            <strong>( {{ $unread }} )</strong>
                        @endif
                    </a>
                </li>
                @can('prescription_access')
            <li class="nav-item">
                <a href="{{ route("admin.prescription") }}" class="nav-link {{ request()->is('admin/prescription') || request()->is('admin/prescription/*') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-address-card">

                    </i>
                    {{ trans('global.prescription') }}
                </a>
            </li>
          @endcan
            <li class="nav-item">
                <a href="{{ route("admin.systemCalendar") }}" class="nav-link {{ request()->is('admin/system-calendar') || request()->is('admin/system-calendar/*') ? 'active' : '' }}">
                    <i class="nav-icon fa-fw fas fa-calendar">

                    </i>
                    {{ trans('global.systemCalendar') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>