@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <h4 class="page-title">Danh sách đơn đặt hàng</h4>
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
                                    <th></th>
                                    <th data-priority="1">Tên người đặt</th>
                                    <th data-priority="1">Địa chỉ</th>
                                    <th data-priority="1">SĐT</th>
                                    <th data-priority="1">Món ăn</th>
                                    <th data-priority="1">SL</th>
                                    <th data-priority="1">Ghi chú</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->product }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ $order->note }}</td>
                                        <td class="text-right">
                                            <form class="float-right" action="{{ route('admin-orders.destroy', $order->id) }}"
                                                  method="POST">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-xs btn-danger"><i class="fas
												fa-trash"></i></button>
                                            </form>
{{--                                            <div class="float-right">--}}
{{--                                                <a class="btn btn-xs btn-primary mr-3" href="{{ route('categories.edit',$order) }}">--}}
{{--                                                    <i class="far fa-edit"></i>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
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