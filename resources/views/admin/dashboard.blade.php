@extends('layouts.adminLayout.admin_design');
@section('content')

<!--main-container-part-->
<div id="content" style="margin-top:-75px;">
    <!--breadcrumbs-->
      <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="" class="tip-bottom"><i class="icon-home"></i> Dashboard</a></div>
      </div>
    <!--End-breadcrumbs-->
    
    <!--Action boxes-->
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li class="bg_lb"> <a href="{{url ('/admin/dashboard')}}"> <i class="icon-dashboard"></i> Dashboard </a> </li>
          <li class="bg_lg span3"> <a href="{{url ('/admin/view-categories')}}"> <i class="icon icon-list"></i><span class="label label-important">{{$categoryCount->total()}}</span> Danh mục</a> </li>
            <li class="bg_ly"> <a href="{{url ('/admin/view-products')}}"> <i class="icon icon-list"></i><span class="label label-success">{{$productsAll->total()}}</span> Sản phẩm </a> </li>
            <li class="bg_lo"> <a href="{{url ('/admin/view-coupons')}}"> <i class="icon icon-list"></i><span class="label label-info">{{$couponCount->total()}}</span> Khuyến mãi</a> </li>
            <li class="bg_ls"> <a href="{{url ('/admin/view-orders')}}"> <i class="icon-fullscreen"></i><span class="label label-warning">{{$orderCount->total()}}</span> Đơn hàng</a> </li>
    
          </ul>
        </div>
    <!--End-Action boxes-->    
    
    <!--Chart-box-->    
        <div class="row-fluid">
          <div class="widget-box">
            <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
              <h5>Tổng kết</h5>
            </div>
            <div class="widget-content" >
              <div class="row-fluid">
                <div class="span12">
                    <ul class="site-stats">
                    <li class="bg_lh"><i class="icon-user"></i> <strong>{{$userCount->total()}}</strong> <h4>Người dùng</h4></li>
                        <li class="bg_lh"><i class="icon-plus"></i> <strong>{{$productsAll->total()}}</strong> <h4>Tổng Sản phẩm </h4></li>
                        <li class="bg_lh"><i class="icon-shopping-cart"></i> <strong>{{$couponCount->total()}}</h4> <h4>Khuyến mãi</h4></li>
                        <li class="bg_lh"><i class="icon-tag"></i> <strong>{{$orderCount->total()}}</h4> <h4>Tổng Đơn hàng</h4></li>
                      </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!--End-Chart-box--> 
        <hr/>

      </div>
    </div>
    
    <!--end-main-container-part-->
@endsection