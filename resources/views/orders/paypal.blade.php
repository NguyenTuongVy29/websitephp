@extends('layouts.frontLayout.front_design')
@section('content')
<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li class="active">Cảm ơn bạn đã đặt hàng!</li>
</ol>
</div>
</div>
</section> 

<section id="do_action">
<div class="container">
<div class="heading" align="center">
<h3>Đơn hàng của bạn đã đặt thành công </h3>
<p>Mã đơn hàng của bạn là {{Session::get('order_id')}} và Tổng tiền phải thanh toán là {{Session::get('grand_total')}} VNĐ</p>
<p>Thanh toán trực tuyến</p>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> {{csrf_field()}}
  <input type="hidden" name="cmd" value="_xclick">
  <input type="hidden" name="business" value="vynguyenmy81@gmail.com">
  <input type="hidden" name="item_name" value="{{Session::get('order_id')}}">
  <input type="hidden" name="currency_code" value="VNĐ">
  <input type="hidden" name="amount" value="{{Session::get('grand_total')}}">
  <input type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_paynow_107x26.png" alt="Buy Now">
  <img alt="" src="https://paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>

</div>
</section>
@endsection
<?php
Session::forget('grand_total');
Session::forget('order_id');

?>