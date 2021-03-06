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
            <img src="../admin/assets/images/homepage/img1.jpg" alt="Background"/>
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
        @if ($errors->any())

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach

        @endif
        <form class="container-fluid" action="{{route('orders.store')}}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12">
                <div class="form-group">
                    <label>T??n ng?????i ?????t</label>
                    <input type="text" name="name"
                           class="form-control"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label>?????a ch??? nh???n h??ng</label>
                    <input name="address"
                           class="form-control"
                           placeholder="">
                    </input>
                </div>
                <div class="form-group">
                    <label>S??? ??i???n tho???i</label>
                    <input name="phone"
                           class="form-control"
                           placeholder="">
                    </input>
                </div>
                {{--                <div class="form-group">--}}
                {{--                    <label>T??n m??n ??n: </label>--}}
                {{--                    <div class="product">--}}
                {{--                        <select name="product[]" class="select2 mb-3 select2-multiple" style="width: 100%"--}}
                {{--                                multiple="multiple" data-placeholder="Choose">--}}
                {{--                            @foreach($products as $product)--}}
                {{--                                <option value="{{$product->name}}" selected>{{$product->name}} - {{$product->cost}}--}}
                {{--                                    VN??--}}
                {{--                                </option>--}}
                {{--                            @endforeach--}}
                {{--                        </select>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="form-group">
                    <label>T??n m??n ??n: </label>
                    <div class="product">
                        @foreach($products as $product)
                            <input name="product[]" class="form-check-input" type="checkbox"
                                   value="{{$product->name}}">
                            <label>{{$product->name}}</label>
                            <br>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label>Ghi ch??</label>
                    <input name="note"
                           class="form-control"
                           placeholder="Vui l??ng ghi ch?? s??? l?????ng v?? c??c ch?? ?? v??? giao h??ng. Xin c???m ??n!">
                    </input>
                </div>
            </div>
            <div class="col-lg-12">
            </div>
            <input name="quantity" type="hidden" class="form-control" value="1">
            <div class="col-lg-12">
                <div class="card-body">
                    <button type="submit" class="btn btn-blue btn-square waves-effect waves-light px-4 mt-3 mb-3">
                        <i class="mdi mdi-check-all mr-2"></i>?????t h??ng
                    </button>
                    <a href="{{route('homes')}}">
                        <button type="button"
                                class="btn btn-danger ml-2 px-4 mb-3 mt-3"><i class="fas fa-window-close"></i>
                            H???y b???
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </section>
    <!-- #blog end -->
    @include('web/layouts/footer')
</div>
@include('web/layouts/script')
</body>
</html>
