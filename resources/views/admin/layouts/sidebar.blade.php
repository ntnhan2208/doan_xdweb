<div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
        {{--        <li class="{{ (request()->is('admin/admins*')) ? 'mm-active' : '' }}">--}}
        {{--            <a href="{{ route('admins.index') }}">--}}
        {{--                <i class="ti-user"></i>--}}
        {{--                <span>{{ trans('site.admin.title') }}</span>--}}
        {{--            </a>--}}
        {{--        </li>--}}

        <li class="{{ (request()->is('admin/categories*')) ? 'mm-active' : '' }}">
            <a href="{{ route('categories.index') }}">
                <i class="	fas fa-bars"></i>
                <span>Quản lý loại món ăn</span>
            </a>
        </li>
        <li class="{{ (request()->is('admin/products*')) ? 'mm-active' : '' }}">
            <a href="{{ route('products.index') }}">
                <i class="fas fa-hamburger"></i>
                <span>Quản lý món ăn</span>
            </a>
        </li>
        <li class="{{ (request()->is('admin/products*')) ? 'mm-active' : '' }}">
            <a href="{{ route('admin-orders.index') }}">
                <i class="fa fa-building"></i>
                <span>Quản lý đơn hàng</span>
            </a>
        </li>

    </ul>
</div>