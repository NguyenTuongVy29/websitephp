@extends('layouts.frontLayout.front_design')
@section('content')

<section id="cart_items">
<div class="container">
<div class="breadcrumbs">
<ol class="breadcrumb">
<li class="active">Đơn hàng của bạn</li>
</ol>
</div>
</div>
</section> 

<section id="do_action">
<div class="container">
<div class="heading" align="center">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Mã sản phẩm</th>
                <th>Số lượng</th>
                <th>Phương thức thanh toán</th>
                <th>Tổng thanh toán</th>
                <th>Ngày lập</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
            <td>{{$order->id}}</td>
                <td>
                    @foreach($order->orders as $pro)
                <a href="{{url('/orders/'.$order->id)}}">
                    {{$pro->product_code}}
                    ({{$pro->product_qty}})
                </a><br>
                    @endforeach
                </td>
                <td>{{$order->payment_method}}</td>
                <td>{{$order->grand_total}}</td>
                <td>{{$order->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</div>
</section>
@endsection