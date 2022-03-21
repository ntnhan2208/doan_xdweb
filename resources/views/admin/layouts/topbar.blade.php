<div class="topbar">
    <div class="topbar-left">
        <a href="#" class="logo">
            <span>
                Trang quản trị
            </span>
        </a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="hidden-sm">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    @foreach($adminLangs as $k => $v)
                        @if(Config::get('app.locale') == $v->slug)
                            <i class="em em-flag-{{ $v->flag }}"></i><i class="mdi mdi-chevron-down"></i>
                        @endif
                    @endforeach
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @foreach($adminLangs as $k => $v)
                        <a class="dropdown-item" href="{!! route('admin.change-language', [$v->slug]) !!}">
                            <i class="em em-flag-{{ $v->flag }}"></i>
                            <span>{{ $v->name }}</span>
                        </a>
                    @endforeach
                </div>
            </li>
{{--            <li class="dropdown notification-list">--}}
{{--                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"--}}
{{--                   aria-haspopup="false" aria-expanded="false">--}}
{{--                    <i class="dripicons-bell noti-icon"></i>--}}
{{--                    <span class="badge badge-danger badge-pill noti-icon-badge">2</span>--}}
{{--                </a>--}}
{{--                <div class="dropdown-menu dropdown-menu-right dropdown-lg">--}}
{{--                    <!-- item-->--}}
{{--                    <h6 class="dropdown-item-text">--}}
{{--                        Notifications (18)--}}
{{--                    </h6>--}}
{{--                    <div class="slimscroll notification-list">--}}
{{--                        <!-- item-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item active">--}}
{{--                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>--}}
{{--                            <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>--}}
{{--                        </a>--}}
{{--                        <!-- item-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>--}}
{{--                            <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>--}}
{{--                        </a>--}}
{{--                        <!-- item-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                            <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>--}}
{{--                            <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>--}}
{{--                        </a>--}}
{{--                        <!-- item-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>--}}
{{--                            <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>--}}
{{--                        </a>--}}
{{--                        <!-- item-->--}}
{{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                            <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>--}}
{{--                            <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- All-->--}}
{{--                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">--}}
{{--                        View all <i class="fi-arrow-right"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </li>--}}

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
{{--                    <img src="{{ \Sanitize::showImage('images/'.Auth::User()->image) }}" alt="profile-user" class="rounded-circle" />--}}
                    @if(Auth::check())
                        <span class="ml-1 nav-user-name hidden-sm"> {{ Auth::User()->name }} <i class="mdi mdi-chevron-down"></i> </span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right">
{{--                    <a class="dropdown-item" href="{{ route('change_profile') }}"><i class="dripicons-user text-muted mr-2"></i>--}}
{{--                        {{ trans('site.admin.profile') }}</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
{{--                    <a class="dropdown-item" href="{{ route('change_password') }}"><i class="dripicons-gear text-muted mr-2"></i>--}}
{{--                        {{ trans('site.admin.change_pass') }}</a>--}}
{{--                    <div class="dropdown-divider"></div>--}}
                    <form action="{{ route('admin.logout') }}" method="POST">
                             {{ csrf_field() }}
                        <button type="submit" class='btn btn-block dropdown-item'><i class="dripicons-exit text-muted
                         mr-2"></i> {{ trans('site.logout') }}</button>
                    </form>
                </div>
            </li>
        </ul><!--end topbar-nav-->
        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="button-menu-mobile nav-link waves-effect waves-light">
                    <i class="dripicons-menu nav-icon"></i>
                </button>
            </li>
        </ul>
    </nav>
</div>
 