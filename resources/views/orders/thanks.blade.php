@extends('layouts.frontLayout.front_design')
@section('content')

<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li class="active">Cảm ơn bạn đã đặt hàng</li>
</ol>
</div>
</div>
</section> 

<section id="do_action">
<div class="container">
<div class="heading" align="center">
<h3>Đơn hàng của bạn đã đặt thành công </h3>
<p>Mã đơn hàng của bạn là {{Session::get('order_id')}} và Tổng tiền phải thanh toán là  {{Session::get('grand_total')}} VNĐ</p>
</div>

</div>
</section>
@endsection
<?php
Session::forget('grand_total');
Session::forget('order_id');

?>