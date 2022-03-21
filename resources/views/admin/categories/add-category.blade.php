@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body shadow-lg bg-white rounded">
                    <form action="{{ route('categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên loại món ăn</label>
                            <div class="input-group">
                                <input type="text" id="example-input1-group1" name="name" class="form-control"
                                       value="{{ old('name') }}"
                                       placeholder="Tên loại món ăn muốn thêm">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 mt-3 mb-3"><i class="mdi
                        mdi-plus-circle-outline mr-2"></i>{{ trans('site.button_add') }}</button>
                        <a href="{{ route('categories.index') }}"><button type="button" class="btn btn-danger ml-2
                    px-4 mb-3 mt-3"><i class="fas fa-window-close"></i> {{trans('site.reset') }} </button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


