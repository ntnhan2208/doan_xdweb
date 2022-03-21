@extends('admin.master')
@section('stylesheet')
    <link href="{{asset('admin/assets/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/scss/_form-advanced.scss')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <form class="container-fluid" action="{{route('products.update',$product->id)}}" method="POST"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <p class="text-uppercase font-14">{{ trans('site.main_content') }}</p>
                    <div class="tab-content detail-list pro-order-box" id="pills-tabContent">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Tên món ăn</label>
                                    <div class="input-group">
                                        <input type="text" name="name"
                                               class="form-control name"
                                               placeholder="{{ trans('site.blog.category.name') }}"
                                               value="{{$product->name}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Chi tiết món ăn</label>
                                    <div class="input-group">
                                                    <textarea name="detail" rows="7"
                                                              class="form-control"
                                                              placeholder="{{ trans('site.blog.category.detail') }}"
                                                    >{{$product->detail}}
                                                    </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <div class="input-group">
                                        <input name="cost" rows="7"
                                               class="form-control"
                                               placeholder="Giá món ăn"
                                               value="{{$product->cost}}">
                                        </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Loại món ăn: </label>
                                    <div class="categories">
                                        <select class="form-control" name="category_id" id="category">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <p class="text-uppercase font-14">{{ trans('site.image') }}</p>
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="image" id="image" readonly/>
                                <button type="button" data-avatar="image"
                                        class="btn btn-blue btn-square waves-effect waves-light px-4 mt-3 mb-3 get_image">
                                    {{ trans('site.button_choose')}}
                                </button>
                                <button type="button" data-avatar="image" disabled='disabled'
                                        class="btn btn-danger btn-square waves-effect waves-light px-4 mt-3 mb-3 ml-3 remove_image">
                                    {{ trans('site.button_remove')}}
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img id="image_avatar" src="{{$product->image}}"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-blue btn-square waves-effect waves-light px-4 mt-3 mb-3">
                        <i class="mdi mdi-check-all mr-2"></i>{{ trans('site.button_update')}}</button>
                    <a href="{{ route('products.index') }}">
                        <button type="button"
                                class="btn btn-danger ml-2 px-4 mb-3 mt-3"><i class="fas fa-window-close"></i>
                            {{trans('site.reset') }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script src="{{asset('admin/assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/editor.js')}}"></script>
@endsection



