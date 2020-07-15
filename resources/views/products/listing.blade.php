@extends('layouts.frontLayout.front_design')
@section('content')

<section id="slider">  <!--slider-->
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#slider-carousel" data-slide-to="1"></li>
                <li data-target="#slider-carousel" data-slide-to="2"></li>
                <li data-target="#slider-carousel" data-slide-to="3"></li>
                <li data-target="#slider-carousel" data-slide-to="4"></li>
                <li data-target="#slider-carousel" data-slide-to="5"></li>
                <li data-target="#slider-carousel" data-slide-to="6"></li>
            </ol>
            
            <div class="carousel-inner">
                <div class="item active">
                <img src="{{url('images/frontend_img/banners/banner1.jpg')}}" alt="">
                </div>
                <div class="item">
                <img src="{{url('images/frontend_img/banners/banner2.jpg')}}" alt="">
                </div>
                
                <div class="item">
                <img src="{{url('images/frontend_img/banners/banner3.jpg')}}" alt="">
                </div>
                <div class="item">
                <img src="{{url('images/frontend_img/banners/banner4.jpg')}}" alt="">
                </div>
                
                <div class="item">
                <img src="{{url('images/frontend_img/banners/banner5.jpg')}}" alt="">
                </div>
                <div class="item">
                <img src="{{url('images/frontend_img/banners/banner6.jpg')}}" alt="">
                </div>
                
                <div class="item">
                <img src="{{url('images/frontend_img/banners/banner7.jpg')}}" alt="">
                </div>
                
            </div>
            
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        
    </div>
    </div>
    </div>
    </section>
    <!--/slider-->

<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
 @include('layouts.FrontLayout.front_sidebar')
</div>

<style>
    .card-content h6 {
        text-decoration: line-through;
    }
</style>

<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
    <h2 class="title text-center">{{$categoryDetails->Name}}</h2>
        @foreach($productsAll as $product)
        <div class="col-sm-3">
         <div class="product-image-wrapper">
         <div class="single-products" style="height: 350px">
          <div class="card row"> 
              <div class="col-md-12">
                <div class="productinfo text-center " style>
                    <div class="card-header">
                        <a href="{{url('product/'.$product->id)}}"> <img src="{{asset('images/backend_img/products/small/'.$product->image)}}" class="image" alt=""/> </a>
                    </div>
                    <div class="card-content">
                        <h6>{{number_format($product->old_price, 0)}} VNĐ</h6>
                        <h5>{{number_format($product->new_price, 0)}} VNĐ</h5>
                        
                        <a href="{{url('product/'.$product->id)}}"><p>{{$product->product_name}}</p></a> 
                    </div>                         
                 <div class="separator clear-left d-flex align-items-end"> 
                      <div class="card-footer">
                        <div class="row">
                        <p class="btn-add">
                        <i class="fa fa-list"></i>
                        <a href="{{url('product/'.$product->id)}}" class="item-details">Chi tiết</a>
                        <i class="fa fa-shopping-cart"></i>
                        <a href="{{url('product/'.$product->id)}}">Đặt hàng</a>
                        </p> 
                        </div>
                 </div>
                </div>
              </div> 
          </div> 
        </div>
        </div>
    </div>
</div>
        @endforeach
        
    </div><!--features_items-->
    
</div>
</div>
</div>
</section>

@endsection