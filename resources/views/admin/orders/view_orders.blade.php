@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
    <a href="#">Đơn hàng</a> <a href="#" class="current">Danh sách đơn hàng</a> </div>
    <h1>Đơn hàng</h1>
    @if(Session::has('flash_message_error'))
    <div class="alert alert-error alert-block">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
    <strong>{{ session('flash_message_error') }}</strong>
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
    </button>
    <strong>{{ session('flash_message_success') }}</strong>
    </div>
    @endif
    </div>
    <div class="container-fluid">
    <hr>
    <div class="row-fluid">
    <div class="span12">
    <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
    <h5>Danh sách đơn hàng</h5>
    </div>
    <div class="widget-content nopadding">
    <table class="table table-bordered data-table">
            <thead>
                <tr>
                <th>STT</th>
                <th>Ngày lập</th>
                <th>Khách hàng</th>
                <th>Email KH</th>
                <th>Sản phẩm</th>
                <th>Tổng tiền (VNĐ)</th>
                <th>Tình trạng</th>
                <th>Hình thức thanh toán</th>
                <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr class="gradeX">
                <td>{{ $order->id }}</td>
                <td>{{ $order->created_at }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->user_email }}</td>
                <td>
                @foreach($order->orders as $pro)
                {{$pro->product_code}}
                ({{$pro->product_qty}})
                <br>
                @endforeach  
                </td>
                <td>{{ $order->grand_total }}</td>
                <td>{{ $order->order_status }}</td>
                <td>{{ $order->payment_method }}</td>
                <td class="center">
                <a target="_blank" href="{{url('/admin/view-order/'.$order->id)}}" class="btn btn-primary btn-mini" >Chi tiết</a>
            </td>
            </div>              
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