@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <div class="float-right">
                    <a class="btn btn-primary float-right" href="{{ route('products.create') }}">{{ trans('site.add') }}</a>
                </div>
                <h4 class="page-title">Danh sách món ăn</h4>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="table-rep-plugin">
                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th data-priority="1">Hình ảnh</th>
                                    <th data-priority="1">Tên món ăn</th>
                                    <th data-priority="1">Chi tiết</th>
                                    <th data-priority="1">Giá</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td><img src="{{ Sanitize::showImage($product->image) }}" width="100"/></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->detail }}</td>
                                        <td>{{ $product->cost }}</td>
                                        <td class="text-right">
                                            <form class="float-right" action="{{ route('products.destroy', $product->id) }}"
                                                  method="POST" onSubmit="if(!confirm('{{ trans('site.products.confirm') }}'))
												  {return false;}">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-xs btn-danger"><i class="fas
												fa-trash"></i></button>
                                            </form>
                                            <div class="float-right">
                                                <a class="btn btn-xs btn-primary mr-3" href="{{ route('products.edit', $product->id) }}">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection