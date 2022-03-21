<nav id="primary-menu" class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
            <ul class="nav navbar-nav nav-pos-right navbar-left">
                <!-- Home Menu -->
                <li class="has-dropdown mega-dropdown active">
                    <a href="{{route('homes')}}">Trang chủ</a>
                </li>
                <li class="has-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Danh sách món ăn</a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{route('homecategories.show',$category->id)}}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <!-- li end -->


            {{--                <div class="module module-cart pull-left">--}}
            {{--                    <div class="module-icon cart-icon">--}}
            {{--                        <i class="fa fa-shopping-cart"></i>--}}
            {{--                        <span class="title">shop cart</span>--}}
            {{--                        <label class="module-label">2</label>--}}
            {{--                    </div>--}}
            {{--                    <div class="module-content module-box cart-box">--}}
            {{--                        <div class="cart-overview">--}}
            {{--                            <ul class="list-unstyled">--}}
            {{--                                <li>--}}
            {{--                                    <img class="img-responsive" src="assets/images/shop/thumb/6.jpg" alt="product"/>--}}
            {{--                                    <div class="product-meta">--}}
            {{--                                        <h5 class="product-title">Red Tape Shoes</h5>--}}
            {{--                                        <p class="product-price">1 x $ 34.00</p>--}}
            {{--                                    </div>--}}
            {{--                                    <a class="cart-cancel" href="#">cancel</a>--}}
            {{--                                </li>--}}
            {{--                                <li>--}}
            {{--                                    <img class="img-responsive" src="assets/images/shop/thumb/7.jpg" alt="product"/>--}}
            {{--                                    <div class="product-meta">--}}
            {{--                                        <h5 class="product-title">Brave Sweater</h5>--}}
            {{--                                        <p class="product-price">1 x $ 32.00</p>--}}
            {{--                                    </div>--}}
            {{--                                    <a class="cart-cancel" href="#">cancel</a>--}}
            {{--                                </li>--}}
            {{--                            </ul>--}}
            {{--                        </div>--}}
            {{--                        <div class="cart-total">--}}
            {{--                            <div class="total-desc">--}}
            {{--                                Subtotal:--}}
            {{--                            </div>--}}
            {{--                            <div class="total-price">--}}
            {{--                                $73.00--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="clearfix">--}}
            {{--                        </div>--}}
            {{--                        <div class="cart--control">--}}
            {{--                            <a class="btn btn--primary btn--block btn--rounded mb-10" href="#">view cart</a>--}}
            {{--                            <a class="btn btn--white btn--bordered btn--rounded btn--block" href="#">Checkout</a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <!-- .module-cart end -->
                <!-- Module Search -->
                <li class="has-dropdown mega-dropdown active">
                    <a href="{{route('orders.create')}}">Đặt hàng</a>
                </li>
                <div class="module module-search pull-left">
                    <div class="module-icon search-icon">
                        <i class="fa fa-search"></i>
                        <span class="title">search</span>
                    </div>
                    <div class="module-content module-fullscreen module--search-box">
                        <div class="pos-vertical-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                        <form class="form-search" action="{{route('searchs.index')}}" method="get">
                                            <input type="text" class="form-control"
                                                   placeholder="Tìm kiếm..." name="name">
                                            <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="module-cancel" href="#"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>
