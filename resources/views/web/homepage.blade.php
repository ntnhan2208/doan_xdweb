<!DOCTYPE html>
<html dir="ltr" lang="en-US">
@include('web/layouts/header')
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');

        * {
            font-family: 'Comfortaa', cursive;
        }
    </style>
</head>
<body>
<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="wrapper clearfix">
    <header id="navbar-spy" class="header header-1 header-transparent header-fixed">
        @include('web/layouts/menu/menu')
    </header>
    <!-- Page Title #1
    ============================================= -->
    <section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
        <div class="bg-section">
            <img src="admin/assets/images/homepage/img1.jpg" alt="Background"/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="title title-1 text-center">
                        <div class="title--content">
                            <div class="title--subtitle">June Food</div>
                            <div class="title--heading">
                                <h1>HEALTHY FOOD</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col-md-12 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>

    <section id="blog2" class="blog pb-100">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                    <div class="heading heading-1 mb-50 text--center">
                        <p class="heading--subtitle">June Food</p>
                        <h2 class="heading--title mb-0">Menu</h2>
                    </div>
                </div>

            </div>
            <!-- .row end -->
            <div class="row">
                @foreach($products as $product)
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="blog-entry">
                            <div class="entry--content">
                                <div class="entry--title">
                                    <h4><a href="#">{{$product->name}}</a></h4>
                                </div>
                                <div class="entry--img">
                                    <a href="#">
                                        <img src="{{ Sanitize::showImage($product->image) }}" width="300"/>
                                    </a>
                                </div>
                                <div class="entry--bio">
                                    {{$product->detail}}
                                </div>
                            </div>
                            <a href="{{route('orders.create',$product)}}" type="button" class="btn btn-primary">Đặt
                                hàng</a>
                            <hr>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- .container end -->
        <section id="blog" class="blog blog-carousel pb-100">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="heading heading-1 mb-50 text--center">
                            <p class="heading--subtitle">Healthy Food</p>
                            <h2 class="heading--title mb-0">Featured Products</h2>
                            <div class="divider--shape-4"></div>
                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true"
                             data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                        @foreach($products as $product)
                            <!-- Blog Entry #1 -->
                                <div class="blog-entry">

                                    <div class="entry--content">

                                        <div class="entry--title" style="text-align: center">
                                            <h4><a href="#">{{$product->name}}</a></h4>
                                        </div>
                                        <div class="entry--img">
                                            <a href="#">
                                                <img src="{{ Sanitize::showImage($product->image) }}" width="300"/>
                                            </a>
                                        </div>
                                        <div class="entry--bio" style="text-align: center">
                                            {{$product->detail}}
                                        </div>
                                    </div>
                                    <!-- .entry-content end -->
                                </div>
                                <!-- .blog-entry end -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- #blog end -->
    @include('web/layouts/footer')
</div>
@include('web/layouts/script')
</body>
</html>
