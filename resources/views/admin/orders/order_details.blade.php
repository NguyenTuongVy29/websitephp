@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
<div id="content-header">
<div id="breadcrumb"> <a href="{{url ('/admin/dashboard')}}" title="" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="#" class="current">Đơn hàng</a> </div>
<h1>Đơn hàng #{{$orderDetails->id}}</h1>
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
        <div class="span6">
                <div class="widget-box">
                <div class="widget-title">
                    <h5>Chi tiết đơn hàng</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-striped table-bordered">
                    
            <tbody>
                <tr>
                <td class="taskDesc"> Ngày lập</td>
                <td class="taskStatus">{{$orderDetails->created_at}}</td>
                </tr>
                <tr>
                <td class="taskDesc"> Trạng thái</td>
                <td class="taskStatus">{{$orderDetails->order_status}}</td>
                </tr>
                <tr>
                <td class="taskDesc"> Tổng tiền</td>
                <td class="taskStatus">{{number_format($orderDetails->grand_total,0)}} VNĐ</td>
                </tr>
                <td class="taskDesc"> Phí vận chuyển</td>
                <td class="taskStatus">{{number_format($orderDetails->shipping_charges,0)}} VNĐ</td>
                </tr>
                <tr>
                <td class="taskDesc"> Mã khuyến mãi</td>
                <td class="taskStatus">{{$orderDetails->coupon_code}}</td>
                </tr>
                <td class="taskDesc"> Giảm trừ khuyến mãi</td>
                <td class="taskStatus">{{number_format($orderDetails->coupon_amount,0)}} VNĐ</td>
                </tr>
                <tr>
                <td class="taskDesc"> Phương pháp thanh toán</td>
                <td class="taskStatus">{{$orderDetails->payment_method}}</td>
                </tr>
            </tbody>
                    </table>
                </div>
                </div>
                <div class="widget-box">
                <div class="widget-title">
                    <h5>Địa chỉ giao hàng</h5>
                </div>
                <div class="widget-content">
                    {{$userDetails->name}} <br>
                    {{$userDetails->address}} <br>
                    {{$userDetails->city}} <br>
                    {{$userDetails->state}} <br>
                    {{$userDetails->country}} <br>
                    {{$userDetails->pincode}} <br>
                    {{$userDetails->mobile}} <br>

                </div>
                </div>
    </div>
<div class="span6">
        <div class="widget-box">
                <div class="widget-title">
                    <h5>Khách hàng đặt hàng</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-striped table-bordered">
                    
            <tbody>
                <tr>
                <td class="taskDesc">Tên khách hàng</td>
                <td class="taskStatus">{{$orderDetails->name}}</td>
                </tr>
                <tr>
                <td class="taskDesc">Email</td>
                <td class="taskStatus">{{$orderDetails->user_email}}</td>
                </tr>
            </tbody>
                    </table>
                </div>
                </div>
        <div class="widget-box">
            <div class="widget-title">
                <h5>Cập nhật địa chỉ giao hàng</h5>
            </div>
            <div class="widget-content">
            <form action="{{url('/admin/update-order-status')}}" method="post"> {{csrf_field()}}
            <input type="hidden" name="order_id" value="{{$orderDetails->id}}">
                   <table style="width:100%;">
                    <tr>
                    <td>
                   <select name="order_status" id="order_status"  required="">
                     <option value="New" @if($orderDetails->order_status== "New") selected @endif>
                         Mới đặt hàng</option>
                     <option value="Pending" @if($orderDetails->order_status== "Pending") selected @endif>
                         Đang chờ xử lý</option>
                     <option value="In Process" @if($orderDetails->order_status== "In Process") selected @endif>
                         Đã xử lý</option>
                     <option value="Shipped" @if($orderDetails->order_status== "Shipped") selected @endif>
                         Đang vận chuyển</option>
                     <option value="Delivered" @if($orderDetails->order_status== "Delivered") selected @endif>
                         Đã giao hàng</option>
                     <option value="Cancelled" @if($orderDetails->order_status== "Cancelled") selected @endif>
                         Đã hủy</option>
                    <option value="Paid" @if($orderDetails->order_status== "Paid") selected @endif>
                        Đã thanh toán</option>
                   </select>
                    </td>
                    <td>
                   <input type="submit" value="Cập nhật trạng thái" class="btn btn-info">
                    </td>
                    </tr>
                   </table>
               </form>
            </div>
        </div>
        <div class="widget-box">
        <div class="widget-title">
            <h5>Địa chỉ giao hàng</h5>
        </div>
        <div class="widget-content">
            {{$orderDetails->name}} <br>
            {{$orderDetails->address}} <br>
            {{$orderDetails->city}} <br>
            {{$orderDetails->state}} <br>
            {{$orderDetails->country}} <br>
            {{$orderDetails->pincode}} <br>
            {{$orderDetails->mobile}} <br>
        </div>
        </div>
</div>
</div>
<hr>
 <div class="row-fluid">
     <h3 align="center">Danh sách sản phẩm đặt hàng</h3>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderDetails->orders as $pro)
            <tr>
            <td>{{$pro->product_code}}</td>
                <td>{{$pro->product_name}}</td>
                <td>{{$pro->product_new_price}}</td>
                <td>{{$pro->product_qty}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

 </div>
</div>
</div>
<!--main-container-part-->

@endsection