@extends('layouts.frontLayout.front_design')
@section('content')

<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li class="active">Giỏ hàng của bạn</li>
</ol>
</div>
<div class="table-responsive cart_info">
@if(Session::has('flash_message_error'))
<div class="alert alert-danger alert-block">
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

<table class="table table-condensed">
<thead>
    <tr class="cart_menu">
        <td class="image">Mặt hàng</td>
        <td class="description"> Mã sản phẩm</td>
        <td class="new_price">Giá (VNĐ)</td>
        <td class="quantity">Số lượng</td>
        <td class="total">Tổng tiền (VNĐ)</td>
        <td class="edit">Xóa sản phẩm</td>
        <td></td>
    </tr>
</thead>
<tbody>
<?php $total_amount =0; ?>
@foreach($userCart as $cart)
<tr>
<td class="cart_product">
    <a href=""><img style="width:80px;" src="{{asset('images/backend_img/products/small/'.$cart->image)}}" alt=""> </a>
</td>
<td class="cart_description">
<p> {{$cart->product_code}} </p>
</td>
<td class="cart_price" >
<p>{{number_format($cart->new_price, 0)}}</p>
</td>
<td class="cart_quantity">
    <div class="cart_quantity_button">
    <a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart->id.'/1')}}"> + </a>
        <input class="cart_quantity_input" type="text" name="quantity" 
    value="{{$cart->quantity}}" autocomplete="off" size="1">
    @if($cart->quantity>1)
        <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart->id.'/-1')}}"> - </a>
    @endif
    </div>
</td>
<td class="cart_total" >
<p class="cart_total_price">{{number_format($cart->new_price*$cart->quantity, 0) }}</p>
</td>
<td class="cart_delete" >
<a class="cart_quantity_delete" href="{{url('cart/delete-product/'.$cart->id)}}" ><i class="fa fa-times"></i></a>
</td>
</tr>
<?php $total_amount = $total_amount + $cart->new_price*$cart->quantity; ?>
@endforeach
</tbody>
</table>
</div>
</div>
</section> <!--/#cart_items-->

<section id="do_action">
<div class="container">
<div class="heading">
<p>Nhập mã khuyến mãi của bạn (nếu có)</p>
</div>
<div class="row">
<div class="col-sm-6">
<div class="chose_area">
    <ul class="user_option">
        <li>
            <label>Mã khuyến mãi</label>
        <form action="{{url('/cart/apply-coupon')}}" method="post"> {{csrf_field()}}
            <input type="text" name="coupon_code">
            <input type="submit" value="Xác nhận" class="btn btn-success">
        </form>
        </li>
    </ul>
</div>
</div>
<div class="col-sm-6">
<div class="total_area">
    <ul>
        @if(!empty(Session::get('CouponAmount')))
        <li>Tổng tiền: <span> <?php echo number_format($total_amount,0); ?> VNĐ</span></li>
        <li>Giảm giá: <span> <?php echo number_format(Session::get('CouponAmount'),0); ?> VNĐ</span></li>
        <li>Tổng thanh toán: <span> <?php echo number_format($total_amount - Session::get('CouponAmount'),0); ?> VNĐ</span></li>
        @else
        <li>Tổng thanh toán: <span> <?php echo number_format($total_amount,0); ?> VNĐ</span></li>
        @endif
    </ul>
        <a class="btn btn-default update" href="">Cập nhật</a>
<a class="btn btn-default check_out" href="{{url('/checkout')}}">Đặt hàng</a>
</div>
</div>
</div>
</div>
</section><!--/#do_action-->


@endsection