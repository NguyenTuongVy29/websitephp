@extends('layouts.frontLayout.front_design')
@section('content')

<section id="form" style="margin-top:20px;">
    <div class="container">
    <div class="breadcrumbs">
        <ol class="breadcrumb">
        <li class="active">Đơn hàng</li>
        </ol>
    </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <h2>Địa chỉ đơn hàng</h2>
                <div class="form-group">
                {{$userDetails->name}}
                </div>
                <div class="form-group">
                {{$userDetails->address}}
                </div>
                <div class="form-group">
                 {{$userDetails->city}}
                </div>
                <div class="form-group">
                {{$userDetails->state}}
                </div>
                <div class="form-group">
                {{$userDetails->country}}
                </div>
                <div class="form-group">
                {{$userDetails->pincode}}
                </div>
                <div class="form-group">
                {{$userDetails->mobile}}
                </div>
                </div>
            </div>
            <div class="col-sm-1">
                <h2></h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <h2>Địa chỉ giao hàng</h2>
                <div class="form-group">
                {{$shippingDetails->name}}
                </div>
                <div class="form-group">
                {{$shippingDetails->address}}
                </div>
                <div class="form-group">
                {{$shippingDetails->city}}
                </div>
                <div class="form-group">
                {{$shippingDetails->state}}
                </div>
                <div class="form-group">  
                {{$shippingDetails->country}}
                </div>
                <div class="form-group">
                {{$shippingDetails->pincode}}
                </div>
                <div class="form-group">
                {{$shippingDetails->mobile}}
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="cart_items" style="margin-top:-200px;" >
<div class="container">

<div class="shopper-informations">
    <div class="row">					
    </div>
</div>

<div class="review-payment">
    <h2>Thanh toán</h2>
</div>

<div class="table-responsive cart_info">
    <table class="table table-condensed">
        <thead>
            <tr class="cart_menu">
                <td class="image">Mặt hàng</td>
                <td class="description">Mã sản phẩm</td>
                <td class="new_price">Giá (VNĐ)</td>
                <td class="quantity">Số lượng</td>
                <td class="total">Tổng cộng (VNĐ)</td>
            </tr>
        </thead>
        <tbody>
            <?php $total_amount =0; ?>
            @foreach($userCart as $cart) 
            <tr>
                <td class="cart_product">
                    <a href=""><img style="width:80px;" src="{{asset('images/backend_img/products/small/'.$cart->image)}}" alt=""></a>
                </td>
                <td class="cart_description">
                <p> {{$cart->product_code}}</p>
                </td>
                <td class="cart_prices">
                <p>{{number_format($cart->new_price, 0)}}</p>
                </td>
                <td class="cart_quantity">
                    <div class="cart_quantity_button">
                    <p>{{$cart->quantity}}</p>
                    </div>
                </td>
                <td class="cart_total">
                <p class="cart_total_price">{{number_format($cart->new_price*$cart->quantity, 0)}}</p>
                </td>
            </tr>
            <?php $total_amount = $total_amount + $cart->new_price*$cart->quantity;?>
            @endforeach
            <tr>
                <td colspan="4">&nbsp;</td>
                <td colspan="2">
                    <table class="table table-condensed total-result">
                        <tr>
                            <td>Thành tiền: </td>
                            <td>{{number_format($total_amount,0)}} VNĐ</td>
                        </tr>
                        <tr class="shipping-cost">
                            <td>Phí vận chuyển (+): </td>
                            <td>0 VNĐ</td>										
                        </tr>
                        <tr class="shipping-cost">
                                <td>Giảm giá khuyến mãi (-): </td>
                        <td>
                        @if(!empty(Session::get('CouponAmount')))
                           {{ number_format(Session::get('CouponAmount'),0)}} VNĐ
                        @else
                            0 VNĐ
                        @endif
                        </td>										
                        </tr>
                        <tr>
                            <td>Tổng thanh toán: </td>
                        <td><span>{{number_format($grand_total=$total_amount - Session::get('CouponAmount'),0)}} VNĐ</span></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<form name="paymentForm" id="paymentForm" action="{{url('/place-order')}}" method="post"> {{csrf_field()}}
<input type="hidden" name="grand_total" value="{{number_format($grand_total,0)}}">
    <div class="payment-options">
        <span>
            <label><strong>Phương thức thanh toán </strong></label>
        </span>
        <span>
            <label><input type="radio" name="payment_method" id="COD" value="Thanh toán khi nhận hàng (COD)"><strong> Thanh toán khi nhận hàng (COD) </strong></label>
        </span>
        <span>
            <label><input type="radio" name="payment_method" id="paypal" value="Thanh toán trực tuyến"><strong> Thanh toán trực tuyến</strong></label>
        </span>
        <span style="float:right;">
        <button type="submit" class="btn btn-mini check_out" onclick="return selectPaymentMethod();">Thanh toán</button>
        
        </span>
    </div>
</form>
</div>
</section> <!--/#cart_items-->

@endsection